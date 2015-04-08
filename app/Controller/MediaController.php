<?php

App::uses('AppController', 'Controller');
App::uses('Xml', 'Utility');

class MediaController extends AppController {

    var $uses = array(
        'Media',
        'Objectsatlocation',
        'Objects',
        'Mediaaboutobjects',
        'Adrparts',
        'Adrtable',
        'Location',
        'Adr',
        'User',
        'Tags',
        'Tagnames',
        'Nameswithmedium'
    );
    public $components = array(
        'Paginator',
        'RequestHandler');
    /*
     *         'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'login'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'index'))
     */
    public $paginate = array('limit' => 25);
    public $helpers = array('Cache');

    public $cacheAction 	= "1 hour";

    function beforeFilter() {
        parent::beforeFilter();
        //   $this->Auth->allow('getexternal','isindb','youtube','upload','uploadpreview','index','uploadlink','uploadverhaal','test','loctest');
   //     $this->Auth->allow(); // allow all

     //   $this->set('user_id', $this->Auth->user('id'));
  //      $this->set('username', $this->Auth->user('username'));
    //    $this->set('naam', $this->Auth->user('naam'));
    //    $this->set('ingelogd', $this->Auth->loggedIn());
    }

    public function delete($id) {
// delete the src img
        $filecalc = dechex(intval($id / 1000)) . DS . dechex($id % 1000);

        $theroot = "/sites/bvstemmen.nl/";

        $data = $this->Media->find('first', array(
            'conditions' => array('Media.id' => $id),
            'recursive' => -1));

        $orgfile = $theroot . 'media/' . $filecalc . '.' . $data['Media']['extensie'];
        if (is_file($orgfile)) {

            unlink($orgfile);
            echo('Deleting ' . $orgfile);
        } else {
            echo ('no file found ' . $orgfile );
        }

        $datamo = $this->Mediaaboutobjects->find('first', array(
            'conditions' => array('Mediaaboutobjects.media_id' => $id),
            'recursive' => -1));
        $maoid = $datamo['Mediaaboutobjects']['id'];

        $this->Mediaaboutobjects->delete($maoid);


        $datamn = $this->Nameswithmedium->find('first', array(
            'conditions' => array('Nameswithmedium.media_id' => $id),
            'recursive' => -1));
        $nwmid = $datamn['Nameswithmedium']['id'];

        $this->Nameswithmedium->delete($nwmid);

        $this->Media->delete($id);


        exit;

// echo imagetypes();
// echo('<br><br><br>');
// $theinfo = gd_info();
// debug($theinfo);
// exit;
        $this->set('data', $data);
    }

    public function tag($tagid) {

        $tagname = $this->Tagnames->find('first', array('fields' => array('tagname'), 'conditions' => array('id' => $tagid), 'recursive' => -1));
        $tagslist = $this->Tagnames->find('all', array('order' => 'Tagnames.tagname ASC'));
        $mlist = $this->Tags->find('all', array('conditions' => array('Tags.tagnames_id' => $tagid)));

        $this->set('tagslist', $tagslist);
        $this->set('data', $mlist);

        $this->set('tagname', $tagname);
        $this->render('index');
    }

    public function index() {

        $tagslist = $this->Tagnames->listall();
        $tagid = $this->Tagnames->giveanid(PROJECTSHORTNAME);    // project tag
        $mlist = $this->Tags->listid($tagid);

        $this->set('tagslist', $tagslist);
        $this->set('data', $mlist);
    }

    public function uploadlink() {
        // default values for display in form
        $defaults = array();

        $defaults["straat"] = "straatnaam of de naam van de buurt";
        $defaults["huisnummer"] = "huisnummer";
        $defaults["maker"] = "maker";
        $defaults["personen"] = "namen";
        $defaults["datum"] = "datum of indicatie";
        $defaults["titel"] = "titel";
        $defaults["naam"] = "Je naam";
        $defaults["email"] = "Je e-mailadres";
        $defaults["tags"] = "";

        $this->set('defaults', $defaults);
    }

    public function isindb($extid, $soort) {
        // wordt extern aangeroepen (ajax)
        $retval = array();
        $status = $this->Media->isindb($extid, $soort);
        $retval[0]['msg'] = "Dit filmpje is al een keer toegevoegd.";
        $retval[0]['status'] = $status;
        $retval[0]['extid'] = $extid;
        $this->set(compact('retval'));
        $this->set('_serialize', 'retval');
    }

    public function uploadverhaal() {
        // default values for display in form
        $defaults = array();

        $defaults["straat"] = "straatnaam of de naam van de buurt";
        $defaults["huisnummer"] = "huisnummer";
        $defaults["maker"] = "maker";
        $defaults["personen"] = "namen";
        $defaults["datum"] = "datum of indicatie";
        $defaults["titel"] = "titel";
        $defaults["naam"] = "Je naam";
        $defaults["email"] = "Je e-mailadres";
        $defaults["tags"] = "";

        $this->set('defaults', $defaults);
    }

    public function lijst() {
        $this->Paginator->settings = $this->paginate;

        if (PROJECTSHORTNAME != "www") {
            $tagid = $this->Tagnames->giveanid(PROJECTSHORTNAME);    // project tag
            $mlist = $this->Tags->find('all', array('conditions' => array('Tags.tagnames_id' => $tagid)));
        } else {
            $mlist = $this->Paginator->paginate('Media');
        }

        $this->set('mlist', $mlist);
    }

    public function detail($mediaid) {
        // echo($this->Auth->user('username'));
        // echo($this->Auth->user('id'));
        // AuthComponent::user('id')
        // AuthComponent::user('username')

//        if ($this->Auth->loggedIn()) {
            // $this->Auth->authError = false;
            //	echo('logged in');
  //      }

        // $this->Media->Behaviors->load('Containable');
//		$mlist = $this->Media->find('all', array( 'contain' => array('Mediaaboutobjects' => array('Objects') ) ));
        $data = $this->Media->find('first', array('conditions' => array('Media.id' => $mediaid)));

        $tags = $this->Tags->find('all', array('conditions' => array('Tags.media_id' => $mediaid)));

// get the address

        $object_id = $data['Mediaaboutobjects'][0]['object_id'];
        $ojadata = $this->Objectsatlocation->find('first', array('conditions' => array('object_id' => $object_id)));
        $loc_id = $ojadata['Location']['id'];

        $locdata = $this->Location->find('first', array('conditions' => array('id' => $loc_id)));



        $addata = $this->Adr->find('first', array('conditions' => array('location_id' => $loc_id)));

        $adres = array();
        if ($addata) {
            $adr_id = $addata['Adr']['id'];

            $adres = $this->Adrparts->find('all', array('order' => 'Adrparts.level', 'conditions' => array('Adrparts.adr_id' => $adr_id)));
        }

// get maker


        $nwm = $this->Nameswithmedium->find('first', array('conditions' => array('Nameswithmedium.media_id' => $mediaid)));

        if ($nwm) {
            $mid = $nwm['Nameswithmedium']['user_id'];
            $maker = $this->User->find('first', array('conditions' => array('User.id' => $mid)));
            $this->set('maker', $maker);
        }


        $this->set('adres', $adres);

        $this->set('locdata', $locdata);
        $this->set('data', $data);
        $this->set('tags', $tags);
    }

    public function youtube($theid) {
        // laat yt filmpje zien
        $this->set('theid', $theid);
        $this->render('youtube', 'youtube');
    }

    public function getexternal() {
//		$theurl='http://www.at5.nl/artikelen/24285/overtoom-afgezet-i-v-m-arrestatie';
        include_once('/sites/bvstemmen.nl/staging/app/Lib/htmldom/simple_html_dom.php');


        //	$theurl = rawurldecode($this->request->query['q']);
        $theurl = $this->request->query['q'];


        $info = get_headers($theurl, 1);
        $mime = split("/", $info['Content-Type']);

        $mimekind = $mime[0]; // video, audio, image, text, application
        $mimetypa = $mime[1];
        $mimetmps = split(";", $mimetypa); // e.g. text/html;charset: utf-8
        $mimetype = $mimetmps[0];


        $parsedurl = parse_url($theurl);

        $hostname = $parsedurl['host'];
        $scheme = $parsedurl['scheme'];
        $path = $parsedurl['path'];

        $baseref = $scheme . "://" . $hostname;

        $ext = pathinfo($path, PATHINFO_EXTENSION);

        // arrays for json result result: media, result:pageinfo
        $result = array();
        $media = array(); // src, width, height, pixels
        $pageinfo = array(); // title, description, author, straat, huisnummer, datetime
        $tmp = array(); // tmp items

        if ($mimekind == "image") {
            list($width, $height) = getimagesize($theurl);
            $media[0]['src'] = $theurl;
            $media[0]['width'] = $width;
            $media[0]['height'] = $height;
            $media[0]['pixels'] = $height * $width;

            // try to read exif
            $a = exif_read_data($theurl);
            if ($a) {
                if (isset($a['DateTime']))
                    $pageinfo['datetime'] = $a['DateTime'];
            }
        }

        if ($mimetype == "html") {
            $html = file_get_html($theurl);

            // search meta tags
            foreach ($html->find('meta') as $meta) {
                $prop = strtolower($meta->property);
                if ($prop == "og:title")
                    $tmp[0]['ogtitle'] = $meta->content;
                if ($prop == "twitter:title")
                    $tmp[0]['twittertitle'] = $meta->content;

                if ($prop == "author")
                    $pageinfo['author'] = $meta->content;

                if ($prop == "og:description")
                    $tmp[0]['ogdescription'] = $meta->content;
                if ($prop == "twitter:description")
                    $tmp[0]['twitterdescription'] = $meta->content;
                if ($prop == "description")
                    $tmp[0]['description'] = $meta->content;

                if ($prop == "geo.position")
                    $tmp[0]['geoposition'] = $meta->content;
                if ($prop == "geo.geoplacename")
                    $tmp[0]['geoplacename'] = $meta->content;
                if ($prop == "geo:lat")
                    $tmp[0]['geolat'] = $meta->content;
                if ($prop == "geo:long")
                    $tmp[0]['geolong'] = $meta->content;
                if ($prop == "ICBM")
                    $tmp[0]['ICBM'] = $meta->content;
            }


            foreach ($html->find('title') as $title) {
                $tmp[0]['titletag'] = $title->plaintext;
            }




            // process description

            if (isset($tmp[0]['ogdescription'])) {
                $pageinfo['description'] = $tmp[0]['ogdescription'];
            } elseif (isset($tmp[0]['twitterdescription'])) {
                $pageinfo['description'] = $tmp[0]['twitterdescription'];
            } elseif (isset($tmp[0]['description'])) {
                $pageinfo['description'] = $tmp[0]['description'];
            }


            // process title

            if (isset($tmp[0]['ogtitle'])) {
                $pageinfo['title'] = $tmp[0]['ogtitle'];
            } elseif (isset($tmp[0]['twittertitle'])) {
                $pageinfo['title'] = $tmp[0]['twittertitle'];
            } elseif (isset($tmp[0]['titletag'])) {
                $pageinfo['title'] = $tmp[0]['titletag'];
            }

            // geo
            // <meta name="ICBM" content="50.167958, -97.133185">
            // ****
            // <meta name="geo.position" content="50.167958;-97.133185">
            // <meta name="geo.placename" content="Rockwood Rural Municipality, Manitoba, Canada">
            // <meta name="geo.region" content="ca-mb">
            // ****
            // <span class="geo">
            // <span class="latitude">50.167958</span>;
            // <span class="longitude">-97.133185</span>
            // </span>
            // ****
            // <meta property="geo:lat" content="52.3662223815918" />
            // <meta property="geo:long" content="4.86850690841675" />
            // <time datetime="">
            foreach ($html->find('time') as $time) {
                if ($time->datetime)
                    $pageinfo['datetime'] = $time->datetime;
                break;
            }

            //	<span class="datum">di 26 nov 2013, 09:24</span>


            foreach ($html->find('img') as $img) {
                $imgurlparts = parse_url($img->src);
                if (!isset($imgurlparts['host']))
                    $img->src = $baseref . $img->src;

                $thenew = count($media);

                $media[$thenew]['src'] = $img->src;
                $media[$thenew]['width'] = $img->width;
                $media[$thenew]['height'] = $img->height;
                $media[$thenew]['pixels'] = $img->height * $img->width;
            }

            // nog een autuer, telegraaf.nl
            // <span class="auteur">Maaike Hoffstedde</span>
        }



        $result['media'] = Set::sort($media, '{n}.pixels', 'desc'); // largest img first :-)
        $result['pageinfo'] = $pageinfo;
        $this->set(compact('result'));
        $this->set('_serialize', array('result'));
    }

    public function ajaxupload() {
//			$this->render('ajaxstreetsearchresult','ajax');
        $this->render(false);
    }


    
    public function upload() {
        // default values for display in form
        $defaults = array();

        $defaults["straat"] = "straatnaam of de naam van de buurt";
        $defaults["huisnummer"] = "huisnummer";
        $defaults["maker"] = "maker";
        $defaults["personen"] = "namen";
        $defaults["datum"] = "datum of indicatie";
        $defaults["titel"] = "titel";
        $defaults["naam"] = "Je naam";
        $defaults["email"] = "Je e-mailadres";
        $defaults["tags"] = "";

        $this->set('defaults', $defaults);

        if (!empty($this->request->data['Upload'])) {
            // form is niet leeg

            $upload = $this->stripdefaults($this->request->data['Upload'], $defaults);   // strip default values

            $thereisfile = false;

            if (isset($upload['selimg']['size'])) {
                if ($upload['selimg']['size'] != 0) {
                    // upload file
                    if ($upload['selimg']['error'] == 0) {
                        $thereisfile = true;
                    }
                }
            }

            if ($thereisfile) {
                // sometimes filenames contain a .  , get the last item
                $fnamea = explode('.', $upload['selimg']['name']);
                $thepos = count($fnamea) - 1;
                $extension = strtolower($fnamea[$thepos]);
                $this->Media->set('extensie', $extension);

                // remove unwanted characters
                $filename = str_replace(" ", "_", $upload["selimg"]["name"]);
                $filename = str_replace(",", "_", $filename);
                $filename = str_replace("*", "_", $filename);
                $filename = str_replace("%", "_", $filename);
                $filename = str_replace("?", "_", $filename);
                $filename = str_replace(":", "_", $filename);
                $filename = str_replace("|", "_", $filename);


                // fix extension to remove extra .
                $filename = str_replace(".", "_", $filename);
                $filename = str_replace("_" . $extension, "." . $extension, $filename);

                $this->Media->set("originalfilename", $filename);
            }



            if ($this->Auth->loggedIn()) {
                // echo('logged in');
                $this->Media->set('user_id', $this->Auth->user('id'));
            } else {
                if ($upload['email'] != "") {
                    $user_id = $this->User->giveid($upload['email'], $upload['naam']);
                } else {
                    $user_id = 0;
                }

                $this->Media->set('user_id', $user_id);
            }



            // *** datering
            if (isset($upload['datum']))
                $this->Media->set('datering', $upload['datum']);
            if (isset($upload['opmerkingen'])) {
                $opmerkingen = htmlentities($upload['opmerkingen']);
                $opmerkingen = str_replace("'", "&rsquo;", $opmerkingen);
                $this->Media->set('opmerkingen', $opmerkingen);
            }
            if (isset($upload['exturl']))
                $this->Media->set('exturl', $upload['exturl']);
            if (isset($upload['extid']))
                $this->Media->set('extid', $upload['extid']);
            if (isset($upload['extthumb'])) {
                $this->Media->set('extthumb', $upload['extthumb']);
                // $extension 		= pathinfo($upload['extthumb'],PATHINFO_EXTENSION);
                //	$this->Media->set('extensie', $extension);
            }
            // *** straat
            $this->Locationcode = $this->Components->load('Locationcode'); // load component
            $this->Locationcode->startup();

            if (isset($upload['latlng'])) {
                // pin put on map
                // store or get lat lon ; get the id
                $ll = explode(",", $upload['latlng']);
                $lat = $ll[0];
                $lng = $ll[1];
                $location_id = $this->Location->giveanid($lat, $lng);

                // $upload['straat']
            } else {
                // adres entry
                $huis = ($upload['huisnummer'] != "" ? "," . $upload['huisnummer'] : "");
                $searchfor = $upload['straat'] . $huis . ',amsterdam,netherlands';



                $location_id = $this->Locationcode->getlocation($searchfor);
            }



            $object_id = $this->Objectsatlocation->giveobjectid($location_id);

            if (!$object_id) {
                $this->Objects->set('naam', ' ');
                $this->Objects->set('type', ' ');

                $this->Objects->save();
                $object_id = $this->Objects->id;

                $this->Objectsatlocation->set('object_id', $object_id);
                $this->Objectsatlocation->set('location_id', $location_id);

                $this->Objectsatlocation->save();
            }

            // *** titel
            $titel = $upload['titel'];
            if ($titel && $titel != "titel")
                $this->Media->set('titel', $titel);


            $this->Media->set('storageloc_id', '1');
            $this->Media->set('soort_id', '1'); // 1-image,2-video
            $this->Media->set('huisnummer', $upload['huisnummer']);

            $this->Media->save();

            $media_id = $this->Media->id;


            $this->Mediaaboutobjects->set('object_id', $object_id);
            $this->Mediaaboutobjects->set('media_id', $media_id);
            $this->Mediaaboutobjects->save();


            if ($thereisfile) {

                // u =uploaded file	SKIPPED
                // e= external fileSKIPPED
                // subdirs calc = dechex ( intval($filename/1000) ) ."/".dechex ( $filename % 1000);
                $filecalc = dechex(intval($this->Media->id / 1000)) . DS . dechex($this->Media->id % 1000) . '.' . $extension;

                $storename = '/sites/bvstemmen.nl/media' . DS . $filecalc;
                $success = rename($upload['selimg']['tmp_name'], $storename);


                // determine filetype

                $theurl = "http://media.bvstemmen.nl/" . $filecalc;

                $info = get_headers($theurl, 1);
                $mime = split("/", $info['Content-Type']);

                $mimekind = $mime[0];     // type: video, audio, image, text, application
                $mimetypa = $mime[1];     // subtype, e.g.: jpg, gif, html, mp3 etc
                $mimetmps = split(";", $mimetypa); // e.g. text/html;charset: utf-8
                $mimetype = $mimetmps[0];


                if ($mimekind == 'video') {
                    $cachedir = pathinfo('/sites/bvstemmen.nl/cache/video' . DS . $filecalc, PATHINFO_DIRNAME);
                    $subdirs = split("/", $cachedir);
                    $existsdir = "/sites/bvstemmen.nl/cache/";
                    foreach ($subdirs as &$value) {
                        $existsdir .= $value . "/";
                        if (!is_dir($existsdir))
                            mkdir($existsdir);
                    }


                    $toopen = "http://83.163.41.197:8008/bvstemmen/convert/video.php?f=/" . $filecalc; // convert video file on remote server
                    file_get_contents($toopen);
                    $this->Media->set('soort_id', '2'); // 1-image,2-video
                    $this->Media->save();
                }


                if ($mimekind == 'audio') {
                    $cachedir = pathinfo('/sites/bvstemmen.nl/cache/video' . DS . $filecalc, PATHINFO_DIRNAME);
                    $subdirs = split("/", $cachedir);
                    $existsdir = "/sites/bvstemmen.nl/cache/";
                    foreach ($subdirs as &$value) {
                        $existsdir .= $value . "/";
                        if (!is_dir($existsdir))
                            mkdir($existsdir);
                    }
                    $toopen = "http://83.163.41.197:8008/bvstemmen/convert/audio.php?f=/" . $filecalc; // convert video file on remote server
                    file_get_contents($toopen);
                    $this->Media->set('soort_id', '3'); // 1-image,2-video,3-audio
                    $this->Media->save();
                }


                if ($mimekind == 'text') {
                    // $toopen = "http://83.163.41.197/bvstemmen/convert/video.php?f=/" . $filecalc;	// convert video file on remote server
                    // file_get_contents($toopen);
                    $this->Media->set('soort_id', '4'); // 1-image,2-video,3-audio,4-text
                    $this->Media->save();
                }

                if ($mimekind == 'application') {
                    // $toopen = "http://83.163.41.197/bvstemmen/convert/video.php?f=/" . $filecalc;	// convert video file on remote server
                    // file_get_contents($toopen);
                    $this->Media->set('soort_id', '5'); // 1-image,2-video,3-audio,4-text,5-application
                    $this->Media->save();
                }
            }


            if (isset($upload['extthumb'])) {
                //store local, no external img linking
                $extfile = file_get_contents($upload['extthumb']);
                $extension = pathinfo($upload['extthumb'], PATHINFO_EXTENSION);
                $filecalc = dechex(intval($this->Media->id / 1000)) . DS . dechex($this->Media->id % 1000) . '.' . $extension;


                $existsdir = '/sites/bvstemmen.nl/media' . "/";
                $subdirs = split("/", pathinfo($filecalc, PATHINFO_DIRNAME));

                foreach ($subdirs as &$value) {
                    $existsdir .= $value . "/";
                    if (!is_dir($existsdir))
                        mkdir($existsdir);
                }


                $storename = '/sites/bvstemmen.nl/media' . DS . $filecalc;
                $handle = fopen($storename, "w");
                fwrite($handle, $extfile);
                fclose($handle);
            }

            // *** tags

            if (PROJECTSHORTNAME != "www") {
                // save a tag for this project
                $tagid = $this->Tagnames->giveanid(PROJECTSHORTNAME);

                $this->Tags->create();
                $this->Tags->set('tagnames_id', $tagid);
                $this->Tags->set('rel', 'media');
                $this->Tags->set('media_id', $media_id);
                $this->Tags->save();
            }

            if ($upload['tags'] != "") {
                $tags = split(",", $upload['tags']);

                $numtags = count($tags);

                for ($i = 0; $i < $numtags; ++$i) {
                    $thetag = trim($tags[$i]);
                    $tagid = $this->Tagnames->giveanid($thetag);

                    $this->Tags->create();
                    $this->Tags->set('tagnames_id', $tagid);
                    $this->Tags->set('rel', 'media');
                    $this->Tags->set('media_id', $media_id);
                    $this->Tags->save();
                }
            }


            // *** maker
            if ($upload['maker'] != "") {
                $maker_id = $this->User->nametoid($upload['maker']);
                $this->Nameswithmedium->create();
                $this->Nameswithmedium->set('user_id', $maker_id);
                $this->Nameswithmedium->set('relatiesoort', 'maker');
                $this->Nameswithmedium->set('media_id', $media_id);
                $this->Nameswithmedium->save();
            }

            // *** wie staan er op
            if ($upload['personen'] != "") {
                $personen_id = $this->User->nametoid($upload['personen']);
                $this->Nameswithmedium->create();
                $this->Nameswithmedium->set('user_id', $personen_id);
                $this->Nameswithmedium->set('relatiesoort', 'staat op');
                $this->Nameswithmedium->set('media_id', $media_id);
                $this->Nameswithmedium->save();
            }



            $onderwerp = 'Nieuwe upload ' . $upload['naam'];
            $bericht = "http:" . HOMEURL . "/media/detail/" . $media_id;
            $bericht .= "\n\n\nDit is een automatisch genegeerd e-mailbericht.";
            $to = EMAILINFO;
            $from = EMAILINFO;
            $audience = 'internal';
            $level = "info";

            $this->notify($onderwerp, $bericht, $to, $from, $audience, $level);

            $this->render('uploaddank');
        } else {

            $this->Session->setFlash('Selecteer een bestand en probeer het opnieuw.');
        }
    }

    public function slideshow() {
        if (($data = Cache::read('slides')) === false) {
            $therecs = $this->Media->find('all', array(
                'recursive' => -1,
                'limit' => 25,
                'order' => 'Media.id DESC',
                'fields' => array('id', 'extthumb', 'soort_id', 'extensie'),
                'conditions' => array('noshow' => 0, 'soort_id !=' => 3)));

            $data = "";

            foreach ($therecs as $index => $content) {

                $thisRec = $therecs[$index]['Media'];

                $id = "item" . $thisRec['id'];
                $height = "54";
                $width = "";

                $filecalc = "/" . dechex(intval($thisRec['id'] / 1000)) . DS . dechex($thisRec['id'] % 1000);

                if (!empty($thisRec['extthumb'])) {
                    $extension = pathinfo($thisRec['extthumb'], PATHINFO_EXTENSION);
                } else {
                    if ($thisRec['soort_id'] == 1) {
                        //soort is image
                        $extension = $thisRec['extensie'];
                    } else {
                        $extension = "jpg";
                    }
                }

                $cachefilename = "/sites/bvstemmen.nl/cache/h" . $height . $filecalc . "." . $extension;
                $mediafilename = "/sites/bvstemmen.nl/media" . $filecalc . "." . $extension;
                $srcurl = "http://cache.bvstemmen.nl/h" . $height . $filecalc . "." . $extension;


                if (!is_file($mediafilename) && !empty($thisRec['extthumb'])) {
                    // external file, download and put in media dir
                    $existsdir = '/sites/bvstemmen.nl/media' . "/";
                    $subdirs = split("/", pathinfo($filecalc, PATHINFO_DIRNAME));

                    foreach ($subdirs as &$value) {
                        $existsdir .= $value . "/";
                        if (!is_dir($existsdir))
                            mkdir($existsdir);
                    }

                    $extfile = file_get_contents($thisRec['extthumb']);

                    $handle = fopen($mediafilename, "w");
                    fwrite($handle, $extfile);
                    fclose($handle);
                }

                clearstatcache();

                if (is_file($mediafilename)) {
                    $size = getimagesize($srcurl);
                    $width = $size[0];
                    $height = $size[1];
                    $data .= "<img id=\"" . $id . "\" src=\"" . $srcurl . "\" width=\"" . $width . "\" height=\"" . $height . "\" alt=\"\">";
                }
            }

            Cache::write("slides", $data);
        }

        echo($data);
        $this->render(false, false);
    }


    function showupload($id) {

    }

    function at5() {

//        $parsed_xml = Xml::build("http://www.at5.nl/feed");
        $parsed_xml = Xml::build("http://www.parool.nl/amsterdam/rss.xml");
// debug($parsed_xml);
        // xml to array conversion
        $this->rss_item = Xml::toArray($parsed_xml);
        //       $this->set('data', $this->rss_item['rss']['channel']['item']);
// $xmlArray = Xml::toArray("http://www.at5.nl/feed");

        debug($this->rss_item['rss']['channel']['item']);


        $items = $this->rss_item['rss']['channel']['item'];
        foreach ($items as $key => $value) { // surely there must be an easier way...
            if (isset($items[$key]['georss:point'])) {
                // GEOCODE is er

                echo( $items[$key]['title'] . ' - ');
                echo( $items[$key]['link'] . ' - ');
                echo( $items[$key]['description'] . ' - ');
                echo( $items[$key]['author'] . ' - ');
                echo( $items[$key]['pubDate'] . ' - ');
                if (isset($items[$key]['enclosure'])) {
                    echo( $items[$key]['enclosure']['@url']);
                    echo( "<img src=\"" . $items[$key]['enclosure']['@url'] . "\"");
                }
                echo( $items[$key]['georss:point'] . ' - ');
                echo( $items[$key]['guid']['@'] );
                echo('<br><br><br>');
            }
//echo($key[0][0] . ' - ' . $value . '<br>');
//			$items[$value['Productcategory']['id']] = $value['Productcategory']['name'];
        }



        // xml to array conversion
//		$this->rss_item = $parsed_xml->toArray();
        //	$this->set('data', $this->rss_item['Rss']['Channel']['Item']);
        $this->autoRender = false;
    }


        public function stripdefaults($upload, $defaults) {

        if (!$upload)
            return false;
        if (!$defaults)
            return($upload);

        foreach ($upload as $key => $val) {
            if (isset($upload[$key]) && isset($defaults[$key])) {
                if ($upload[$key] == $defaults[$key]) {
                    $upload[$key] = '';
                }
            }
        }
        return($upload);
    }

}
