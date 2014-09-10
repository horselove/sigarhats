<details>
    <summary>
        All Data in This View
    </summary>
    <?php
    $data = $this->viewVars;
    unset(
        $data['content_for_layout'],
        $data['title_for_layout'],
        $data['scripts_for_layout']
    );
    ?>
    <pre><?php print_r($data); ?></pre>
</details>
