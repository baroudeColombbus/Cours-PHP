<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Cours PHP 7 - Introduction</title>
  </head>
  <body>
    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 8 - Types de données</h1>
        <p class="lead">Dans PHP, il n'existe pas pas de déclaration du type d'une variable lors de sa création. Même PHP 7 reste un langage pauvrement typé comparé à C ou Java </p>
        <a href="#" role="button" class="btn btn-primary btn-lg">learn more</a>

    </div><!-- /container -->
    <!-- ============= Conteu principl ============ -->
    <main class="container bg-white">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2>Les types de données</h2>
                <ul>
						<li>Les types de base :</li>
							<ul>
								<li>Entiers, avec le type integer, qui permet de représenter les nombres entiers dans les bases 10, 8 et 16.</li>
								<li>Flottants, avec le type double ou float, au choix, qui représentent les nombres réels, ou plutôt décimaux au sens mathématique. </li>
								<li>Chaînes de caractères, avec le type string.</li>
								<li>Booléens, avec le type boolean, qui contient les valeurs de vérité TRUE ou FALSE (soit les valeurs 1 ou 0 si on veut les afficher).</li>
							</ul>
						<li>Les types composés :</li>
							<ul>
								<li>Tableaux, avec le type array, qui peut contenir plusieurs valeurs.</li>
								<li>Objets, avec le type object.</li>
							</ul>
							<li>Les types spéciaux</li>
							<ul>
								<li>Objets, avec le type object.</li>
								<li>Type null.</li>
							</ul>
					</ul>
            </div><!-- /col -->

            <div class="col-sm-12 col-md-12">
                <h2>Les opérateurs numériques</h2>
                <p>PHP offre un large éventail d'opérateurs utilisables avec des nombres. Les variables ou les nombres sur lesquels agissent ces opérateurs sont appelés les opérandes.</p>

                <table class="table table-sencondary table-striped">
                    <div class="col-sm-12 col-md-12 ">
                    <caption class="text-center text-primary">Les opérateurs numériques</caption>
                    </div>
                    <thead>
                            <tr>
                            <th scope="col">Opérateur</th>
                            <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">+</th>
                                <td>Addition</td>
                            </tr>
                            <tr>
                                <th scope="row">-</th>
                                <td>Soustraction</td>
                            </tr>
                            <tr>
                                <th scope="row">*</th>
                                <td>Multiplication</td>
                            </tr>
                            <tr>
                                <th scope="row">**</th>
                                <td>Puissance (associatif à droite)<br>
                                    $a=3;<br>
                                    echo $a**2; //Affiche 9<br>
                                    echo $a**2**4; //Affiche 43046721 soit 3**(2**4) ou 316</td>
                            </tr>
                            <tr>
                                <th scope="row">/</th>
                                <td>Division</td>
                            </tr>
                            <tr>
                                <th scope="row">%</th>
                                <td>Modulo : reste de la division du premier opérande par le deuxième. Fonctionne aussi avec des opérandes décimaux. Dans ce cas, PHP ne tient compte que des parties entières de chacun des opérandes.<br>
                                $var = 159;<br>
                                echo $var%7; //affiche 5 car 159=22x7 + 5.<br>
                                $var = 10.5;<br>
                                echo $var%3.5; //affiche 1et non pas 0. <br>

                                <?php
                                $var = 159;
                                echo "<div class=\"border border-danger w-50 p-2\">Dans la variable \$var j'ai rentré 159 <br>";
                                echo "Si je veux afficher le contenu de \$var le voici \$var contient $var <br>";
                                echo "le résultat du modulo de $var par 7 est égale (=) ".$var%7. ;
                                echo "</div>";

                                
                                ?>
                            
                            
                            </td>

                            </tr>
                            <tr>
                                <th scope="row">--</th>
                                <td>Décrémentation : soustrait une unité à la variable. Il existe deux possibilités, la prédécrémentation, qui soustrait avant d'utiliser la variable, et la postdécrémentation, qui soustrait après avoir utilisé la variable.<br>
                                $var=56;<br>
                                echo $var--; //affiche 56 puis décrémente $var.<br>
                                echo $var; //affiche 55.<br>
                                echo --$var; //décrémente $var puis affiche 54.</td>
                            </tr>
                            <tr>
                                <th scope="row">++</th>
                                <td>Incrémentation : ajoute une unité à la variable. Il existe deux possibilités, la préincrémentation, qui ajoute 1 avant d'utiliser la variable, et la postincrémentation, qui ajoute 1 après avoir utilisé la variable.
                                $var=56;<br>
                                echo $var++; //affiche 56 puis incrémente $var.<br>
                                echo $var; //affiche 57 : postincrémentation<br>
                                echo ++$var; //incrémente $var puis affiche 58 : préincrémentation<br>
                                <?php 
                               $var = 56;
                               echo "<div class=\"border border-danger w-50 p-2\">".$var++."<br>".$var."<br>".++$var."</div>";
                                ?>
                                </td>
                            </tr>                            
                        </tbody>
                    </table><!-- /table -->
                    <h3>Le type Boolean</h3>
                    <p>Le type booléen ne peut contenir que deux valeurs différentes TRUE ou FALSE</p>
                    <?php 
                    $a = 99;
                    $b = $a < 100;

                    echo "<div class=\"border border-danger text-primary\"> \$b vaut $b </div>";
                    
                    ?>
                    <h3>Les opérateurs booléens</h3>
                    <p>Quand ils sont associés, les opérateurs booléens servent à écrire des expressions simples ou complexes, qui sont évaluées par une valeur booléenne TRUE ou FALSE.Ils seront utilisés dans les instructions conditionnelles</p>
                    <table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Opérateur</th>
							<th scope="col">Description</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">==</th>
						<td>
						Teste l'égalité de deux valeurs. L'expression $a == $b vaut TRUE si la valeur de $a est égale à celle de $b et
						FALSE dans le cas contraire :<br>
						$a = 345;<br>
						$b = "345";<br>
						$c = ($a==$b);<br>
						$c est un booléen qui vaut TRUE car dans un contexte de comparaison numérique, la chaîne "345" est évaluée comme le nombre 345. Si $b="345
						éléphants" nous obtenons le même résultat.
						</td>
					</tr>
					<tr>
						<th scope="row">!= ou <></th>
						<td>
						Teste l'inégalité de deux valeurs.<br>
						L'expression $a != $b vaut TRUE si la valeur de $a est différente de celle de $b et FALSE dans le cas contraire.
						</td>
					</tr>
					<tr>
						<th scope="row">===</th>
						<td>
						Teste l'identité des valeurs et des types de deux expressions.<br>
						L'expression $a === $b vaut TRUE si la valeur de $a est égale à celle de $b et que $a et $b sont du même type. Elle vaut FALSE dans le cas contraire :<br>
						$a = 345;<br>
						$b = "345";<br>
						$c = ($a===$b);<br>
						$c est un booléen qui vaut FALSE car si les valeurs sont égales, les types sont différents (integer et string).
						</td>
					</tr>
					<tr>
						<th scope="row">!==</th>
						<td>
						Teste la non-identité de deux expressions.<br>
						L'expression $a !== $b vaut TRUE si la valeur de $a est différente de celle de $b ou si $a et $b sont d'un type différent. Dans le cas contraire, elle vaut FALSE :<br>
						$a = 345;<br>
						$b = "345";<br>
						$c = ($a!==$b);<br>
						$c est un booléen qui vaut TRUE car si les valeurs sont égales, les types sont différents (integer et string).
						</td>
					</tr>
					<tr>
						<th scope="row"><</th>
						<td>
						Teste si le premier opérande est strictement inférieur au second.
						</td>
					</tr>
					<tr>
						<th scope="row"><=</th>
						<td>
						Teste si le premier opérande est inférieur ou égal au second.
						</td>
					</tr>
					<tr>
						<th scope="row">></th>
						<td>
						Teste si le premier opérande est strictement supérieur au second.
						</td>
					</tr>
					<tr>
						<th scope="row">>=</th>
						<td>
						Teste si le premier opérande est supérieur ou égal au second.
						</td>
					</tr>
					<tr>
						<th scope="row"><=></th>
						<td>
						Avec $a<=>$b, retourne -1, 0 ou 1 respectivement si $a<$b, $a=$b ou $a>$b ($a et $b peuvent être des chaînes).
						</td>
					</tr>
					</tbody>
					</table><!-- /table -->
				
				<p>Les opérateurs logiques</p>
				<table class="table table-striped">
				<thead>
					<tr>
					<th scope="col">Opérateurs</th>
					<th scope="col">Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<th scope="row">OR</th>
					<td>Teste si l'un au moins des opérandes a la valeur TRUE :<br>
                        $a = true;<br>
                        $b = false;<br>
                        $c = false;<br>
                        $d = ($a OR $b);//$d vaut TRUE.<br>
                        $e = ($b OR $c); //$e vaut FALSE.</td>
					</tr>
					<tr>
					<th scope="row">||</th>
					<td>Équivaut à l'opérateur OR mais n'a pas la même priorité.</td>
					</tr>
					<tr>
					<th scope="row">XOR</th>
					<td>Teste si un et un seul des opérandes a la valeur TRUE :<br>
                        $a = true;<br>
                        $b = true;<br>
                        $c = false;<br>
                        $d = ($a XOR $b); //$d vaut FALSE.<br>
                        $e = ($b XOR $c); //$e vaut TRUE.</td>
					</tr>
					<tr>
					<th scope="row">AND</th>
					<td>Teste si les deux opérandes valent TRUE en même temps :<br>
                        $a = true;<br>
                        $b = true;<br>
                        $c = false;<br>
                        $d = ($a AND $b); //$d vaut TRUE.<br>
                        $e = ($b AND $c); //$e vaut FALSE.</td>
					</tr>
					<tr>
					<th scope="row">&&</th>
					<td>Équivaut à l'opérateur AND mais n'a pas la même priorité.</td>
					</tr>
					<tr>
					<th scope="row">!</th>
					<td>Opérateur unaire de négation, qui inverse la valeur de l'opérande :
                    $a = TRUE;<br>
                    $b = FALSE;<br>
                    $d = !$a; //$d vaut FALSE.<br>
                    $e = !$b; //$e vaut TRUE.</td>
					</tr>
				</tbody>
				</table>

            </div><!-- /col -->
        </div><!-- row -->

        <?php 
        require("../inc/footer.inc.php");
        ?> 

    </main><!-- /main -->

    <!-- script bootstrap/popper/jquery dependencies -->
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

