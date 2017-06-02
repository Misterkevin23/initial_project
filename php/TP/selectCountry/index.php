<?php
include 'include/header.php';
include 'include/connexion_db.php';
include 'include/pays.inc.php';

?>

<h1>  ATLAS demographique par pays </h1>

<label>Selectionné votre pays</label>

<?php echo selectFormat(getCountry()); ?>


<div id=info>

</div>

<script type="text/javascript" src=js/zepto.min.js></script>
<script type="text/javascript" src=js/lodash.min.js></script>
<script type="text/javascript" src=js/pays.js></script>

<?php include 'include/footer.php'; ?>