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
            for ($com=1; $com <= 5; $com++)
            {
                echo ($com);
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("*");
                }
                echo ($com);
                 for ($jakkapat=5; $jakkapat >= $com; $jakkapat--)
                {
                    echo ("*");
                }
                echo (10-$com);
                echo ("\n");
            }
        ?>
    </pre>
</body>