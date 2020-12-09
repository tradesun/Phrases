
<html><header><meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
/* vvv */
img {
    width: 33%;
}
	
	h2 {
    font-size: 25px;
}
</style>
</header><body>
	

<?php

$plants = "Sambucus ebulus,Sambucus nigra,Viburnum lantana,Viburnum opulus,Amaranthus palmeri,Beta vulgaris,Allium sativum,Allium victorialis,Carum carvi,Tagetes patula,Berberis vulgaris,Corylus avellana,Corylus pontica,Brassica oleracea,Campanula lactiflora,Cucurbita pepo,Diospyros lotus,Vaccinium myrtillus,Vaccinium vitis-idaea,Trigonella caerulea,Castanea sativa Mill,Fagus orientalis Lipsky,Quercus iberica,Ribes grossularia,Ribes nigrum,Ribes rubrum,Juglans regia,Mentha x piperita,Morus alba,Polygonum alpinum,Polygonum aviculare,Rumex acetosa,Crataegus curvisepala Lindm,Crataegus pentagyna Waldst,Fragaria vesca,Malus orientalis Uglizk,Mespilus germanica,Prunus avium,Prunus x domestica,Pyrus caucasica Fed,Pyrus communis,Rubus idaeus,Sorbus caucasigena,Sorbus torminalis,Capsicum annuum,Staphylea colchica,Agaricus arvensis Schaeff,Agaricus campestris,Amanita caesarea,Ramaria flava Schaeff,Macrolepiota procera,Armillariella mellea,Pleurotus ostreatus,Lactarius deliciosus,Russula rosea Pers,Suillus granulatus,Suillus luteus,Cantharellus cibarius";
$ri = explode(',',$plants);

foreach($ri as $row){
	echo "<h2><a href='sites/{$row}.html' > $row </a> </h2>";
	
	$dir = new DirectoryIterator("images/" . $row);
	foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
		$img = 'images/' . $row . '/' . $fileinfo->getFilename();
		echo '<a href="' . $img . '"><img src="' . $img . '"/></a>';
        
    }
}
}
?>


</body>	
	

</html>