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
            for ($com=1; $com <= 4; $com++)
            {
                 for ($jakkapat=4; $jakkapat >= $com; $jakkapat--)
                {
                    echo "  ";
                }
                    echo $com;
                 for ($jakkapat=2; $jakkapat <= $com; $jakkapat++)
                {
                    echo "**";
                }
                    echo $com;
            
            echo "\n";
            }
            
             for ($com=2; $com <= 4; $com++)
            {
             
                 for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo "  ";
                }
                    echo 5-$com;
                 for ($jakkapat=3; $jakkapat >= $com; $jakkapat--)
                {
                    echo "**";
                }
                    echo 5-$com;
            
            echo "\n";
            }
        ?>
    </pre>
</body>