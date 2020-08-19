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
            for ($com=1; $com <= 4 ; $com++)
            {
             
                 for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo "*";
                }
                 for ($jakkapat=$com; $jakkapat >= 2; $jakkapat--)
                {
                    echo $jakkapat;
                }
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo $jakkapat;
                }
            echo "\n";
            }
        ?>
    </pre>
</body>