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
                echo ("*");
                echo (($com*2)-1);
                echo ("*");
                echo ($com*2) ; 
                echo ("\n");
            }
        ?>
    </pre>
</body>