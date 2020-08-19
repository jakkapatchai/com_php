<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n"
        ;
            for ($com=1; $com <= 3; $com++)
            {
                for ($jakkapat=$com; $jakkapat <= 3; $jakkapat++)
                {
                   echo ($jakkapat);
                }
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                   echo ("*");
                }
                for ($jakkapat=2; $jakkapat <= $com; $jakkapat++)
                {
                   echo ("*");
                }
                for ($jakkapat=3; $jakkapat >= $com; $jakkapat--)
                {
                   echo ($jakkapat);
                }
                
           echo ("\n");
            }
            for ($com=2; $com >= 1; $com--)
            {
               for ($jakkapat=$com; $jakkapat <= 3; $jakkapat++)
                {
                   echo ($jakkapat);
                }
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                   echo ("*");
                }
                for ($jakkapat=1; $jakkapat <= $com -1; $jakkapat++)
                {
                   echo ("*");
                }
                for ($jakkapat=3; $jakkapat >= $com; $jakkapat--)
               {
                   echo ($jakkapat);
               }
           echo ("\n");
            }
        ?>
    </pre>
</body>