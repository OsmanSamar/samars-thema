<?php get_header();
//Template Name: contact
?>

<main class="page">




    <style>
    #demo3 {
        display: flex;

        align-items: center;
        justify-content: center;

        height: 200px;

        width: 200px;

        overflow: visible;

        /* position: relative; */
        position: fixed;
        top: 50%;
        /* Center vertically */
        right: 0;
        /* Position it at the right edge */
        transform: translateY(-50%);
        /* Adjust to perfectly center vertically */
        /* background-color: #fff; */

        color: #fff;
        border-radius: 50%;
        font-size: 12px;
        letter-spacing: 3px;
        z-index: 1000;
        /* Ensure it stays on top of other elements */
    }

    #demo3 span {
        position: absolute;

        left: 50%;
        transform-origin: 0 100px;

    }

    @keyframes rotating {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .text-circle {
        animation-duration: 20s;
        animation-iteration-count: infinite;
        animation-name: rotating;
        animation-timing-function: linear;
        height: 200px;
        width: 200px;
        overflow: visible;

    }
    </style>




    <a href="/projecten" id="demo3" class="circle text-circle">
        <div style="position: relative; height: 200px;">
            <?php
            $text = '- Bekijk alle projecten -- Bekijk alle projecten -- Bekijk alle projecten -';
            $characters = str_split($text);
            $totalCharacters = count($characters);
            $rotationStep = 360 / $totalCharacters;


            foreach ($characters as $index => $character) {
                $rotationAngle = $rotationStep * $index;
                echo '<span style="transform: translateX(-50%) rotate(' . $rotationAngle . 'deg);">' . $character . '</span>';
            }
            ?>
        </div>
    </a>




</main>

<?php get_footer() ?>