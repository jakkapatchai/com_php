<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($nick=1; $nick <= 5; $nick++)
            {
                echo ("*");
                for ($jakkapat=2; $jakkapat <= $nick; $jakkapat++)
                {
                    echo ("  ");
                }
                for ($jakkapat=$nick; $jakkapat <= 5; $jakkapat++)
                {
                    echo ($nick);
                }
                for ($jakkapat=$nick; $jakkapat <= 4; $jakkapat++)
                {
                    echo ($nick);
                }
                for ($jakkapat=2; $jakkapat <= $nick; $jakkapat++)
                {
                    echo ("  ");
                }
                echo ("*");
            echo ("\n");
            }
        ?>
    </pre>
</body>