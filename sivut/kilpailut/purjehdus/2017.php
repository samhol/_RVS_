#Purjehduskilpailut  <small>vuonna 2017</small>

##Hirsiluoto-Race 10.6. <small>Lähtöaika: 12:30.00</small>

<?php $csvTaulu('purjehduskilpailut/2017/hirsiluoto.csv') ?>

<?php echo TAKAISIN_KILPAILUVALIKKOON; ?>

##Virutholm-purjehdus 5.8. <small>Lähtöaika: 11:45:00</small>

<?php $csvTaulu('purjehduskilpailut/2017/virutholm.csv') ?>

<?php echo TAKAISIN_KILPAILUVALIKKOON; ?>

##RVS-Ranking 2017 <small>vain seuran jäsenille</small>

**Lyhenteet:**
* `Hir.`: Hirsiluoto-Race
* `Vir.`: Virutholm-purjehdus

<?php $csvTaulu('purjehduskilpailut/2017/yht.csv'); ?>
<?php $purjehdusKilpailutLinkit(); ?>
