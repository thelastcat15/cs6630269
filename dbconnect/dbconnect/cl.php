<?php
    function cl($query) {
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $results_js = json_encode($results);
        ?>
        <script>
            console.log(<?php echo $results_js; ?>);
        </script>
        <?php
    }
?>