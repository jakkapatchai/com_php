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
            for ($com=1; $com <= 7; $com++)
            {
                 for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo (" ");
                }
                for ($jakkapat=0; $jakkapat < 3; $jakkapat++)
                {
                    echo ($jakkapat+$com);
                }
                for ($jakkapat=0; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("*");
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>