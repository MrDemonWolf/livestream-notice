<div id="wrap">
    <h1><?php _e('Livestream Notice Settings', 'livestreamNotice');?></h1>

    <form method="post" action="options.php">

        <?php settings_fields($this->pluginPrefix . '-settings-group');?>
        <?php do_settings_sections($this->pluginPrefix . '-settings-group');?>

        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row"><label
                        for="<?php echo $this->pluginPrefix; ?>-channelname"><?php _e('Twitch Channel', 'livestreamNotice');?></label></th>
                <td><input name="<?php echo $this->pluginPrefix; ?>-channelname" type="text" id="<?php echo $this->pluginPrefix; ?>-channelname" value="<?php echo get_option($this->pluginPrefix . '-channelname', $this->channelname) ?>" class="regular-text">
                    <p class="description"><?php _e('Your Twitch account username you want to show notices for on your website.', 'livestreamNotice');?></p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label
                        for="<?php echo $this->pluginPrefix; ?>-noticemessage"><?php _e('Notice Message', 'livestreamNotice');?></label></th>
                <td><input name="<?php echo $this->pluginPrefix; ?>-noticemessage" type="text" id="<?php echo $this->pluginPrefix; ?>-noticemessage" value="<?php echo get_option($this->pluginPrefix . '-noticemessage', $this->noticemessage) ?>" class="regular-text">
                <p>The default is "Hey, did you know I am live streaming right now?"</p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label
                        for="<?php echo $this->pluginPrefix; ?>-twitchclientid"><?php _e('Twitch Client ID', 'livestreamNotice');?></label></th>
                <td><input name="<?php echo $this->pluginPrefix; ?>-twitchclientid" type="text" id="<?php echo $this->pluginPrefix; ?>-twitchclientid" value="<?php echo get_option($this->pluginPrefix . '-twitchclientid', $this->twitchclientid) ?>" class="regular-text">
                <h4>How to get your twitch client ID</h4>
                <div>1.Go to the <a href="https://dev.twitch.tv/" target="_blank">Twitch Dev site</a> and log in to your account.</div>
                <div>2.Under My Applications, choose Register an App.</div>
                <div>3. On the Dashboard, under Developer Applications, choose Register Your Application.</div>
                <div>4. On the Register Your Application page, complete the form and choose Register.</div>
                <div>5.Note the generated client ID that you will use to paste into the <strong>Twitch Client ID field</strong></div>
                </td>
            </tr>
            </tbody>
        </table>

        <?php submit_button();?>

    </form>
</div>