<!DOCTYPE html>
<html>
<head>
 <title>Boites de dialogue</title>
 
</head>
<body>

 <button onclick="alert('Hello word')">Hello</button>
 <button onclick='saisir_nom()'>My name</button>
 
</body>
<script type="text/javascript" >
 function saisir_nom(){
 /*on récupère le nom saisi sur la boite de dialogue prompt dans une variable nom*/
 var nom=prompt("Quel est votre nom?");
 var conf=confirm("Vous vous appelez vraiment "+nom);
 /*confirm renvoie true si l'utilisateur clique sur ok et false dans le cas contraire */
 if(conf){
 alert("Bonjour "+nom);
 }
 }
</script>
</html>
