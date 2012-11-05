<?php 
$name = $_GET['name'];
//echo $name;
//get post data for contact name $_GET
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod'))
{
  //load the vcal vcard
  vcal();
}else {
    //load the vcard
    vcard();
}
function vcard(){
    $myname = $GLOBALS['name'];
      # Send correct headers      
  header("Content-type: text/x-vcard; charset=utf-8"); 
                    // Alternatively: application/octet-stream
                    // Depending on the desired browser behaviour
                    // Be sure to test thoroughly cross-browser

  header("Content-Disposition: attachment; filename=\"" . $myname . ".vcf\"");
  # Output file contents 
  echo file_get_contents($myname . ".vcf");
}


function vcal(){
    $myname = $GLOBALS['name'];
        # Send correct headers      
    header("Content-type: text/x-vcalendar; charset=utf-8"); 
                    // Alternatively: application/octet-stream
                    // Depending on the desired browser behaviour
                    // Be sure to test thoroughly cross-browser

    header("Content-Disposition: attachment; filename=\"iphonecontact.ics\";");
    # Output file contents 

    # This what it should look like
    # BEGIN:VCALENDAR
    # VERSION:2.0
    # BEGIN:VEVENT
    # DTSTART;TZID=Europe/London:20120617T090000
    # DTEND;TZID=Europe/London:20120617T100000
    # SUMMARY:iPhone Contact
    # DTSTAMP:20120617T080516Z
    # ATTACH;VALUE=BINARY;ENCODING=BASE64;FMTTYPE=text/directory;
    #  X-APPLE-FILENAME=iphonecontact.vcf:
    #  QkVHSU46VkNBUkQNClZFUlNJT046My4wDQpOOkNvbnRhY3Q7aVBob25lOzs7DQpGTjppUGhvbm
    #  UgQ29udGFjdA0KRU1BSUw7VFlQRT1JTlRFUk5FVDtUWVBFPVdPUks6aXBob25lQHRoZXNpbGlj
    #  b25nbG9iZS5jb20NClRFTDtUWVBFPUNFTEw7VFlQRT1WT0lDRTtUWVBFPXByZWY6KzQ0MTIzND
    #  U2Nzg5MA0KRU5EOlZDQVJE
    # END:VEVENT
    # END:VCALENDAR

    echo "BEGIN:VCALENDAR\n";
    echo "VERSION:2.0\n";
    echo "BEGIN:VEVENT\n";
    echo "SUMMARY:Click attached contact below to save to your contacts\n";
    $dtstart = date("Ymd")."T".date("Hi")."00";
    echo "DTSTART;TZID=Europe/London:".$dtstart."\n";
    $dtend = date("Ymd")."T".date("Hi")."01";
    echo "DTEND;TZID=Europe/London:".$dtend."\n";
    echo "DTSTAMP:".$dtstart."Z\n";
    echo "ATTACH;VALUE=BINARY;ENCODING=BASE64;FMTTYPE=text/directory;\n";
    echo " X-APPLE-FILENAME=iphonecontact.vcf:\n";
    $vcard = file_get_contents($myname . ".vcf");        # read the file into memory
    $b64vcard = base64_encode($vcard);                      # base64 encode it so that it can be used as an attachemnt to the "dummy" calendar appointment
    $b64mline = chunk_split($b64vcard,74,"\n");             # chunk the single long line of b64 text in accordance with RFC2045 (and the exact line length determined from the original .ics file exported from Apple calendar
    $b64final = preg_replace('/(.+)/', ' $1', $b64mline);   # need to indent all the lines by 1 space for the iphone (yes really?!!)
    echo $b64final;                                         # output the correctly formatted encoded text
    echo "END:VEVENT\n";
    echo "END:VCALENDAR\n";
}
?>