## xFastTemplate2
This (snippet) module is a simple class for php/html/xhmtl/xml templates.  
Please keep in mind that this module is out of date - use e.g. "Twig" instead.

### Description
Module for Lepton-CMS  
see: http://www.lepton-cms.org  
and: http://forum.lepton-cms.org

#### Author(-s)
- Dietrich Roland Pehlke  

#### Require
- PHP >= 7.2.2
- MySQL 5.x
- [LEPTON-CMS](LEPTON-CMS) 4.1.0 _(5.0 recommended)_

#### Notice
The WebsiteBaker support ended within version 0.6.0. If you are in the need to use it inside WebsiteBaker you will have to use the 0.5.8 tag.

##### example
```
// [1]  get instance of the class  
$oXFT2 = x_fast_template_2\parser::getInstance();  

// [2]  set the template - directory  
$oXFT2->pathAddition .= "tests/";  

// [3]  testing "get_by_template"  
echo $oXFT2->get_by_template(  
    "hello.lte",  
    [  
        "name"  => "world",  
        "info"  => PHP_VERSION  
    ]  
);  

echo LEPTON_tools::display( $oXFT2, "pre", "ui message green");  

// [4]  blocks  
$aAllBlocks = $oXFT2->getBlocks("blocks.txt");  
echo LEPTON_tools::display( $aAllBlocks, "pre", "ui message green");  

echo $aAllBlocks['block2'];  
//  [5] remove unused markers  
$oXFT2->remove_unusedMarkers( $aAllBlocks['block2'] );  

echo $aAllBlocks['block2']."*";  
```

[LEPTON-CMS]: https://lepton-cms.org