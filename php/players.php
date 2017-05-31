<?php
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/equipe.inc.php';
?>

<h1>Players</h1>

<!-- <button id="btn">Test</button>
<button id="reset">Resert</button>
<button id="ajax">Ajax</button>
<ul id="list"></ul> -->
<div id="filters">
	<label>Limite d'age</label>
	<select id="selectAge">
		<option value="20">20 ans</option>
		<option value="25">25 ans</option>
		<option value="30">30 ans</option>
		<option value="25">35 ans</option>
	</select>
</div>
<p>Nombre de résultat(s): <strong id="nbResults"></strong></p><br>
<div id="listPlayers"></div>

<!-- charger la liste des joueurs par ajax -->
<!-- <script type="text/javascript" src=js/script.js></script> -->
<script type="text/javascript" src=js/zepto.min.js></script>
<script type="text/javascript" src=js/lodash.min.js></script>
<script type="text/javascript" src=js/players.js></script>

<?php include 'includes/footer.php'; ?>