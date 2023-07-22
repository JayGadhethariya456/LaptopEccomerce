<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Accordion - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        $(function () {
            $("#accordion").accordion({
                active: 1,
                animate: 200
            });
        });
    </script>
    <style>
        #accordion {
            width: 500px;
            margin: 0 auto;
        }

        #accordion h3 {
            background-color: #eee;
            border-bottom: 1px solid #ddd;
            padding: 10px;
            cursor: pointer;
        }

        #accordion div {
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .toggler {
            width: 500px;
            height: 200px;
            position: relative;
        }

        #button {
            padding: .5em 1em;
            text-decoration: none;
        }

        #effect {
            width: 240px;
            height: 170px;
            padding: 0.4em;
            position: relative;
        }

        #effect h3 {
            margin: 0;
            padding: 0.4em;
            text-align: center;
        }

        .ui-effects-transfer {
            border: 2px dotted gray;
        }
    </style>
    <script>
        $(function () {
            // run the currently selected effect
            function runEffect() {
                // get effect type from
                var selectedEffect = $("#effectTypes").val();

                // Most effect types need no options passed by default
                var options = {};
                // some effects have required parameters
                if (selectedEffect === "scale") {
                    options = { percent: 50 };
                } else if (selectedEffect === "transfer") {
                    options = { to: "#button", className: "ui-effects-transfer" };
                } else if (selectedEffect === "size") {
                    options = { to: { width: 200, height: 60 } };
                }

                // Run the effect
                $("#effect").effect(selectedEffect, options, 500, callback);
            };

            // Callback function to bring a hidden box back
            function callback() {
                setTimeout(function () {
                    $("#effect").removeAttr("style").hide().fadeIn();
                }, 1000);
            };

            // Set effect from select menu value
            $("#button").on("click", function () {
                runEffect();
                return false;
            });
        });
    </script>
</head>

<body>
    <div id="accordion">
        <h3>Section 1</h3>
        <div>
            <p>Content for section 1 goes here.</p>
        </div>
        <h3>Section 2</h3>
        <div>
            <p>Content for section 2 goes here.</p>
        </div>
        <h3>Section 3</h3>
        <div>
            <p>Content for section 3 goes here.</p>
        </div>
    </div>
    <div class="all" style="padding-left: 520px;">
        <div class="toggler">
            <div id="effect" class="ui-widget-content ui-corner-all">
                <h3 class="ui-widget-header ui-corner-all">Effect</h3>
                <p>
                    Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus,
                    adipiscing
                    ut, luctus sed, hendrerit vitae, mi.
                </p>
            </div>
        </div>

        <select name="effects" id="effectTypes">
            <option value="blind">Blind</option>
            <option value="bounce">Bounce</option>
            <option value="clip">Clip</option>
            <option value="drop">Drop</option>
            <option value="explode">Explode</option>
            <option value="fade">Fade</option>
            <option value="fold">Fold</option>
            <option value="highlight">Highlight</option>
            <option value="puff">Puff</option>
            <option value="pulsate">Pulsate</option>
            <option value="scale">Scale</option>
            <option value="shake">Shake</option>
            <option value="size">Size</option>
            <option value="slide">Slide</option>
            <option value="transfer">Transfer</option>
        </select>

        <button id="button" class="ui-state-default ui-corner-all">Run Effect</button>
    </div>
</body>

</html>