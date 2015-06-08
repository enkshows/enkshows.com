<?php 
// this is an array of show names and descriptions. 
// we should use this for the "Show Descriptions" section of the site
// the use case here is unlike others, we DO NOT cycle through the array to print data to the screen
// instead, we are using this to store data for indivdidual reference later. 
// this way, all show descriptions are the same / consistent on each show page
// 
  $descriptions = array(
    array(
      "name" => "Children's Club",
      "description" => "<p>An international exhibition featuring every category of children's clothing from newborn to age 12, layette items, fashion accessories, footwear, toys and gifts. Introduced in 2000, exhibitors reflect an eclectic base of new designers bursting on to the scene and joining the established collections. Children's Club is an excellent opportunity to be seen by the medium to better children's specialty retailers and boutiques. Children's Club is held four times a year in NYC in January, March, August and October.</p>",
      "logo" => "http://www.enkshows.com/img/shows/childrensclub/logos.png",
    ),
    array(
      "name" => "Accessorie Circuit",
      "description" => "<p>Established in 1987, CIRCUIT is a comprehensive women’s accessory and footwear exhibition featuring designer and fine jewelry, handbags, footwear, scarves, belts and gift items. Held 3 times a year during the January, April and August NYC market weeks, this exhibition runs concurrently with ENK’s Intermezzo Collections.</p>",
      "logo" => "http://www.enkshows.com/img/shows/acic/logos01-old.png",
      "subshow" => array(
        "name" => "Fraiche @ Circuit",
        "description" => "<p>The highly successful platform for emerging designers within Accessorie Circuit. This curated selection of inspired talent will showcase an exclusive mix of innovative collections, handpicked based on their creative skills, craftsmanship, quality and originality.</p>",
        "logo" => "http://www.enkshows.com/img/shows/acic/logos04.png",
      )
    ),
    array(
      "name" => "Intermezzo Collection",
      "description" => "<p>The perfect opportunity between the major women’s fashion markets for retailers to discover and shop the current trends in all ready to wear classifications - contemporary, active wear, casual, denim, bridge and evening. Held concurrently with Accessorie Circuit during the NYC market weeks (January, April, and August)</p>",
      "logo" => "http://www.enkshows.com/img/shows/acic/logos02-old.png",
      "subshow" => array(
        "name" => "Flex @ Intermezzo",
        "description" => "<p>This dedicated section is the crossover of today’s contemporary activewear – where contemporary fashion meets function. Flex @ Intermezzo introduces and integrates activewear into the contemporary marketplace to enhance an increasingly important category for our retailers.</p>",
        "logo" => "http://www.enkshows.com/img/shows/acic/flex_logo.png"
      )
    ),
    array(
       "name" => "Coterie",
       "description" => "<p>Coterie is a premier global marketplace that bridges apparel and accessories designers to the international 'Who’s Who' of Retailers. Coterie builds exclusive shopping experiences from the ground up so that designers and buyers can create a synergy that fuels their businesses. Coterie is a platform for generating revenue and inspiring trends.</p><p><a href='http://www.enkshows.com/tmrw' >TMRW:</a> A select portfolio of contemporary designers in a unique and intimate setting within Coterie, held twice a year in NYC. The future marketplace, highlighting fresh talent, exceptional quality and showcasing tomorrow’s premiere brands.</p><p><a href='http://www.enkshows.com'>Sole Commerce:</a> A trade show within Coterie dedicated exclusively to footwear and handbags with the best domestic and international retailers.</p>",
       "logo" => "http://www.enkshows.com/img/shows/coterie/coterie_logo_top-165x165.png"
     ),
    array(
       "name" => "TMRW",
       "description" => "<p>A select portfolio of contemporary designers in a unique and intimate setting within Coterie, held twice a year in NYC. The future marketplace, highlighting fresh talent, exceptional quality and showcasing tomorrow’s premiere brands.</p>",
       "logo" => "http://www.enkshows.com/img/shows/coterie/logo-tmrw.png",
       "subshow" => array(
         "name" => "Coterie",
         "description" => "<p>Coterie is a premier global marketplace that bridges apparel and accessories designers to the international 'Who’s Who' of Retailers. Coterie builds exclusive shopping experiences from the ground up so that designers and buyers can create a synergy that fuels their businesses. Coterie is a platform for generating revenue and inspiring trends.</p>",
         "logo" => "http://www.enkshows.com/img/shows/childrensclub/logos.png",
       )
     ),
    array(
       "name" => "Sole Commerce",
       "description" => "<p>A trade show within Coterie dedicated exclusively to footwear and handbags with the best domestic and international retailers.</p>",
       "logo" => "http://www.enkshows.com/img/shows/coterie/logo-sole.png"
     ),
    array(
       "name" => "FWD",
       "description" => "<p>A fashion forward juniors trade show showcasing the most sought-after juniors and young contemporary ready-to-wear during New York market week. With the addition of FWD, buyers now get exclusive access to the entire women’s marketplace in one location.</p>",
       "logo" => "http://www.enkshows.com/img/shows/fwd/fwd-logo.png"
     ),
  );
;?>
