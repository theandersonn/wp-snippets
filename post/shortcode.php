<?php
    function example_shortcode() {
        echo
        '
            <div style="border: 2px dashed red; padding: 30px 15px;">
                <h3>Test Shortcode</h3>
            </div>
        ';
    }

    add_shortcode('example', 'example_shortcode');

    // How to use
    // [example]
    // echo do_shortcode('[example]');