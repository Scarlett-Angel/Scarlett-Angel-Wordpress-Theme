<?php
add_shortcode('car-finance-sussex-sitemap-sussex', function()
              {
                ob_start();
                global $wpdb;
                $countys = array('East Sussex', 'West Sussex');
                foreach ($countys as $county) {
                $myfile = fopen("$county.xml", "w");
                 fwrite($myfile, "<?xml version='1.0' encoding='utf-8'?>");
    fwrite($myfile, "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>");
               $towns = $wpdb->get_col("SELECT Town from uk_towns where county='$county' order by Town");
                foreach ($towns as $town) {
                    fwrite($myfile, "<url>");
                    fwrite($myfile, "<loc>http://www.carfinancesussex.co.uk/car-finance-in-sussex/?town=" . urlencode($town) . "</loc>");
                    fwrite($myfile, "<lastmod>2016-05-31</lastmod>");
                    fwrite($myfile, "<changefreq>daily</changefreq>");
                    fwrite($myfile, "<priority>1.0</priority>");
                    fwrite($myfile, "</url>");
                } //$towns as $town
                fwrite($myfile, "</urlset>");
    fclose($myfile);
        } //$counties as $country
return ob_get_clean();
                
});


add_shortcode('ex-mota-london', function()
{
        ob_start();
    global $wpdb;
    $countys = array(
      "West Sussex",
      "East Sussex"
    );
        foreach ($countys as $county) {
              $myfile = fopen("$county.xml", "w");
                 fwrite($myfile, "<?xml version='1.0' encoding='utf-8'?>");
    fwrite($myfile, "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>");
               $towns = $wpdb->get_col("SELECT Town from uk_towns where county='$county' order by Town");
                foreach ($towns as $town) {
                    fwrite($myfile, "<url>");
                    fwrite($myfile, "<loc>http://exmotabilitycarssussex.co.uk/areas-we-cover/?town=" . urlencode($town) . "&amp;county=" . urlencode($county) . "</loc>");
                    fwrite($myfile, "<lastmod>2016-04-18</lastmod>");
                    fwrite($myfile, "<changefreq>daily</changefreq>");
                    fwrite($myfile, "<priority>1.0</priority>");
                    fwrite($myfile, "</url>");
                } //$towns as $town
                              fwrite($myfile, "</urlset>");
    fclose($myfile);
        } //$countries as $country
    return ob_get_clean();
});

add_shortcode('ex-mota-surrey', function()
{
        ob_start();
    global $wpdb;
    $countys = array(
      "Surrey"
    );
        foreach ($countys as $county) {
              $myfile = fopen("$county.xml", "w");
                 fwrite($myfile, "<?xml version='1.0' encoding='utf-8'?>");
    fwrite($myfile, "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>");
               $towns = $wpdb->get_col("SELECT Town from uk_towns where county='$county' order by Town");
                foreach ($towns as $town) {
                    fwrite($myfile, "<url>");
                    fwrite($myfile, "<loc>http://exmotabilitycarssussex.co.uk/areas-we-cover/?town=" . urlencode($town) . "&amp;county=" . urlencode($county) . "</loc>");
                    fwrite($myfile, "<lastmod>2016-04-18</lastmod>");
                    fwrite($myfile, "<changefreq>daily</changefreq>");
                    fwrite($myfile, "<priority>1.0</priority>");
                    fwrite($myfile, "</url>");
                } //$towns as $town
                              fwrite($myfile, "</urlset>");
    fclose($myfile);
        } //$countries as $country
    return ob_get_clean();
});

add_shortcode('sitemap-builder21e', function()
{
        ob_start();
    
    global $wpdb;
    $countries = array(
        "Scotland",
        "England",
        "Wales",
        "Northern Ireland"
    );
   
    $types = array(
        "tractors",
    "AMAZONE+tractors", 
    "AUDI+tractors",
   "BMW+tractors",
    "BOMFORD+tractors",
    "BROWNS+tractors",
    "CASE+tractors",
    "CASE+IH+tractors",
    "CLAAS+tractors",
    "COUSINS+tractors",
    "DELEKS+tractors",
    "DEUTZ+tractors",
    "DOWDESWELL+tractors",
    "FENDT+tractors",
    "FLEMING+tractors",
    "FORD+tractors",
    "HAYTER+tractors",
    "HONDA+tractors",
    "HORSCH+tractors",
    "HYUNDAI+tractors",
    "IFOR+WILLIAMS+tractors",
    "ISUZU+tractors",
    "JCB+tractors",
    "JOHN+DEERE+tractors",
        "JPM+tractors",
    "KONGSKILDE+tractors",
    "KUBOTA+tractors",
    "KUHN+tractors",
    "KVERNELAND+tractors",
    "LAND+ROVER+tractors",
    "LELY+tractors",
    "LEMKEN+tractors",
    "MANITOU+tractors",
   "MARSHALL+tractors",
    "MASSEY+FERGUSON+tractors",
    "MCCONNEL+tractors",
    "MCHALE+tractors",
    "MERCEDES-BENZ+tractors",
    "NEW+HOLLAND+tractors",
    "PARMITER+tractors",
    "RANSOME+tractors",
    "RICHARD WESTERN+tractors",
    "SIMBA+tractors",
    "SISIS+tractors",
    "STRIMECH+tractors",
    "TEAGLE+tractors",
    "TWOSE+tractors",
    "VADERSTAD+tractors",
    "VALTRA+tractors",
    "VICON+tractors",
    "WESSEX+tractors",
        "AMMANN+plant+machinery",
    "ATLAS COPCO+plant+machinery",
    "AUSA+plant+machinery",
    "BARFORD+plant+machinery",
    "BENDI+plant+machinery",
    "BENFORD+plant+machinery",
   "BENFORD TEREX+plant+machinery",
    "BOBCAT+plant+machinery",
    "BOMAG+plant+machinery",
    "CASE+plant+machinery",
    "CATERPILLAR+plant+machinery",
    "COMPAIR+plant+machinery",
"DAEWOO+plant+machinery",
    "DEMAG+plant+machinery",
    "DOOSAN+plant+machinery",
    "FG+WILSON+plant+machinery",
    "FLEXI+plant+machinery",
    "FUCHS+plant+machinery",
    "GENIE+plant+machinery",
    "GMS+plant+machinery",
    "HITACHI+plant+machinery",
    "HYSTER+plant+machinery",
    "HYUNDAI+plant+machinery",
    "IFOR+WILLIAMS+plant+machinery",
    "INDESPENSION+plant+machinery",
    "INGERSOLL+RAND+plant+machinery",
    "JCB+plant+machinery",
    "KOBELCO+plant+machinery",
    "KOMATSU+plant+machinery",
    "KUBOTA+plant+machinery",
    "LIEBHERR+plant+machinery",
    "LINDE+plant+machinery",
    "MANITOU+plant+machinery",
    "MERLO+plant+machinery",
    "MITSUBISHI+plant+machinery",
    "MOROOKA+plant+machinery",
    "NEW+HOLLAND+plant+machinery",
    "NEXPOWER+plant+machinery",
    "NISSAN+plant+machinery",
    "RENT+DEMOLITION+plant+machinery",
    "STILL+plant+machinery",
    "TAKEUCHI+plant+machinery",
    "TEREX+plant+machinery",
    "THWAITES+plant+machinery",
    "TOYOTA+plant+machinery",
    "VOLVO+plant+machinery",
    "WACKER+NEUSON+plant+machinery",
    "WEIDEMANN+plant+machinery",
    "YALE+plant+machinery",
    "YANMAR+plant+machinery",
    "lorries"
    );
    foreach ($types as $type) {
        foreach ($countries as $country) {
            $Counties = $wpdb->get_col("SELECT DISTINCT(County) as County from uk_towns where country='$country' order by County");
              $myfile = fopen("$type-$country.xml", "w");
                 fwrite($myfile, "<?xml version='1.0' encoding='utf-8'?>");
    fwrite($myfile, "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>");
               
            foreach ($Counties as $county) {
               $towns = $wpdb->get_col("SELECT Town from uk_towns where county='$county' order by Town");
                foreach ($towns as $town) {
                    fwrite($myfile, "<url>");
                    fwrite($myfile, "<loc>http://www.tradeatractor.org.uk/advertise/?town=" . urlencode($town) . "&amp;county=" . urlencode($county) . "&amp;country=" . urlencode($country) . "&amp;type=" . $type . "</loc>");
                    fwrite($myfile, "<lastmod>2016-04-04</lastmod>");
                    fwrite($myfile, "<changefreq>daily</changefreq>");
                    fwrite($myfile, "<priority>1.0</priority>");
                    fwrite($myfile, "</url>");
                } //$towns as $town
  
            } //$Counties as $county
                              fwrite($myfile, "</urlset>");
    fclose($myfile);
        } //$countries as $country
    } //$types as $type

    return ob_get_clean();
});
add_shortcode('sitemap-builder2', function()
{
    ob_start();
    global $wpdb;
    $countries = array(
        "Scotland",
        "England",
        "Wales",
        "Northern Ireland"
    );
    $types     = array(
        "tractors",
        "lorries",
        "plant+machinery"
    );
    foreach ($types as $type) {
        foreach ($countries as $country) {
            $Counties = $wpdb->get_col("SELECT DISTINCT(County) as County from uk_towns where country='$country' order by County");
            foreach ($Counties as $county) {
                $towns = $wpdb->get_col("SELECT Town from uk_towns where county='$county' order by Town");
                foreach ($towns as $town) {
                    echo "<a href='http://www.tradeatractor.co.uk/advertise/?town=" . urlencode($town) . "&county=" . urlencode($county) . "&country=" . urlencode($country) . "&type=" . $type . "'>Sell your " . urldecode($type) . " in " . urldecode($town) . "</a><br />";
                } //$towns as $town
            } //$Counties as $county
        } //$countries as $country
    } //$types as $type
    echo "&lt;/urlset&gt;";
    return ob_get_clean();
});
?>