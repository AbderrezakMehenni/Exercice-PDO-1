<?php
    require_once('connexion.php');

    // Exercice 1
    $request=$db->query('SELECT * FROM clients');
    $clients=$request->fetchAll();

    // var_dump($clients);
    echo "<h1>Exercice 1</h1>";
    foreach ($clients as $client) {
        echo "<p>Le client est ".$client['lastName']." ".$client['firstName'].", sa date de naissance est: ".$client['birthDate']."</p>";
    }

    // Exercice 2
    $request=$db->query('SELECT * FROM showtypes');
    $showtypes=$request->fetchAll();

    // var_dump($showtypes);
    echo "<h1>Exercice 2</h1>";
    foreach ($showtypes as $showtype) {
        echo "<p>".$showtype['type']."</p>";
    }

    // Exercice 3
    $request=$db->query('SELECT * FROM clients LIMIT 20');
    $clients=$request->fetchAll();

    // var_dump($clients);
    echo "<h1>Exercice 3</h1>";
    foreach ($clients as $client) {
        echo "<p>Le client est ".$client['lastName']." ".$client['firstName'].", sa date de naissance est: ".$client['birthDate']."</p>";
    }

    // Exercice 4
    $request=$db->query('SELECT * FROM clients');
    $showtypes=$request->fetchAll();

    // var_dump($clients);
    echo "<h1>Exercice 4</h1>";
    foreach ($clients as $client) {
        if ($client['card'] === "1") {
            echo "<p>Le client est ".$client['lastName']." ".$client['firstName'].", sa date de naissance est: ".$client['birthDate']."</p>";
        }
    }

    // Exercice 5
    $request=$db->query("SELECT * FROM clients WHERE lastName LIKE 'M%'");
    $clients=$request->fetchAll();

    // var_dump($clients);
    echo "<h1>Exercice 5</h1>";
    foreach ($clients as $client) {
        echo "<p>Nom: ".$client['lastName']."</p>";
        echo "<p>Prénom: ".$client['firstName']."</p>";
    }

    // Exercice 6
    $request=$db->query("SELECT * FROM shows");
    $shows=$request->fetchAll();

    // var_dump($clients);
    echo "<h1>Exercice 6</h1>";
    foreach ($shows as $show) {
        echo "<p>".$show['title']." par ".$show['performer']." le ".$show['date']." à ".$show['startTime']."</p>";
    }

    // Exercice 7
    $request=$db->query("SELECT * FROM clients");
    $clients=$request->fetchAll();

    // var_dump($clients);
    echo "<h1>Exercice 7</h1>";
    foreach ($clients as $client) {
        echo "<hr>";
        echo "<p>Nom: ".$client['lastName']."</p>";
        echo "<p>Prénom: ".$client['firstName']."</p>";
        echo "<p>Date de naissance: ".$client['birthDate']."</p>";
        if($client['card'] === "1") {
            echo "<p>Carte de fidélité: Oui</p>";
        } else {
            echo "<p>Carte de fidélité: Non</p>";
        }
        if($client['cardNumber'] === "NULL") {
            echo "<p>Numéro de carte: Pas renseigné</p>";
        } else {
            echo "<p>Numéro de carte: ".$client['cardNumber']."</p>";
        }
    }
?>