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
                echo ($nick);
                for ($jakkapat=1; $jakkapat <= $nick; $jakkapat++)
                {
                    echo ("  ");
                }
                for ($jakkapat=1; $jakkapat <= $nick; $jakkapat++)
                {
                    echo ("*");
                } 
            echo ("\n");
            }
        ?>
    </pre>
</body>