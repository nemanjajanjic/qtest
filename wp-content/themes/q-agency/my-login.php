<?php
/* Template name: My Login Page */
get_header();
?>

    <div class="container">
        <?php
        $token = '25157d224d5a294ca63d1245651a3c34ab070589335d4ee2f9a274c007402db79db2520d23b524ec';
        $response = wp_remote_get('https://symfony-skeleton.q-tests.com/api/v2/users', array(
            'headers' => array(
                'Authorization' => 'Bearer ' . $token
            ),
        ));
        $data = json_decode($response['body'], true);
        //        echo '<pre>' . var_export($data, true) . '</pre>';


        ?>
    </div>
<?php
get_footer(); ?>