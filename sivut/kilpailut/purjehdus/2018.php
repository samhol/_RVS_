#Purjehduskilpailut  <small>vuonna 2018</small>

##Hirsiluoto-Race 16.6. <small>Lähtöaika: 11:30.00</small>

<?php $csvTaulu('purjehduskilpailut/2018/hirsiluoto.csv') ?>

<?php echo TAKAISIN_KILPAILUVALIKKOON; ?>

##Virutholm-purjehdus 11.8. <small>Lähtöaika: 13:00:00</small>

<?php $csvTaulu('purjehduskilpailut/2018/virutholm.csv') ?>

<?php echo TAKAISIN_KILPAILUVALIKKOON; ?>

##RVS-Ranking 2018 <small>vain seuran jäsenille</small>

**Lyhenteet:**
* `Hir.`: Hirsiluoto-Race
* `Vir.`: Virutholm-purjehdus

<?php $csvTaulu('purjehduskilpailut/2018/yht.csv'); ?>
<?php $purjehdusKilpailutLinkit(); ?>
