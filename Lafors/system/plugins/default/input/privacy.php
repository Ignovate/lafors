<?php

?>
<div class="ossn-privacy">
    <table border="0">
        <tr>
            <td style="vertical-align:top;">
                <label><?php echo ossn_print('privacy'); ?></label>

            </td>
            <td>
                <input type="radio" name="privacy" value="2" checked="checked"/>
                <span><?php echo ossn_print('public'); ?></span>

                <p> <?php echo ossn_print('privacy:public:note'); ?> </p>

                <input type="radio" name="privacy" value="3"/>
                <span><?php echo ossn_print('friends'); ?></span>

                <p> <?php echo ossn_print('privacy:friends:note'); ?> </p>
            </td>
        </tr>
    </table>
</div>
