<?php $cfg = array(
    'title'         => $this->lang['mod']['page']['confirm'] . ' &raquo; ' . $this->lang['mod']['page']['verify'],
    'pathInclude'   => BG_PATH_TPL . 'personal' . DS . 'default' . DS . 'include' . DS,
);

include($cfg['pathInclude'] . 'personal_head.php'); ?>

    <form name="confirm_form" id="confirm_form">
        <input type="hidden" name="a" value="confirm">
        <input type="hidden" name="verify_id" value="<?php echo $this->tplData['verifyRow']['verify_id']; ?>">
        <input type="hidden" name="verify_token" value="<?php echo $this->tplData['verifyRow']['verify_token']; ?>">
        <input type="hidden" name="<?php echo $this->common['tokenRow']['name_session']; ?>" value="<?php echo $this->common['tokenRow']['token']; ?>">

        <div class="form-group">
            <label><?php echo $this->lang['mod']['label']['username']; ?></label>
            <input type="text" name="user_name" id="user_name" value="<?php echo $this->tplData['userRow']['user_name']; ?>" readonly class="form-control form-control-lg">
        </div>

        <div class="form-group">
            <label><?php echo $this->lang['mod']['label']['captcha']; ?> <span class="text-danger">*</span></label>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="javascript:void(0);" class="captchaBtn">
                        <img src="<?php echo BG_URL_MISC; ?>index.php?m=captcha&a=make" class="captchaImg" alt="<?php echo $this->lang['mod']['btn']['captcha']; ?>">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0);" class="captchaBtn">
                        <span class="oi oi-reload"></span>
                        <?php echo $this->lang['mod']['btn']['captcha']; ?>
                    </a>
                </li>
            </ul>
            <input type="text" name="captcha" id="captcha" placeholder="<?php echo $this->lang['rcode']['x030201']; ?>" data-validate class="form-control form-control-lg">
            <small class="form-text" id="msg_captcha"></small>
        </div>

        <div class="bg-submit-box"></div>
        <div class="bg-validator-box mt-3"></div>

        <div class="form-group">
            <button type="button" class="btn btn-primary btn-block btn-lg bg-submit"><?php echo $this->lang['mod']['btn']['submit']; ?></button>
        </div>

    </form>

<?php include($cfg['pathInclude'] . 'personal_foot.php'); ?>

    <script type="text/javascript">
    var opts_validator_form = {
        captcha: {
            len: { min: 4, max: 4 },
            validate: { type: "ajax", format: "text" },
            msg: { too_short: "<?php echo $this->lang['rcode']['x030201']; ?>", too_long: "<?php echo $this->lang['rcode']['x030201']; ?>", ajaxIng: "<?php echo $this->lang['rcode']['x030401']; ?>", ajax_err: "<?php echo $this->lang['rcode']['x030402']; ?>" },
            ajax: { url: "<?php echo BG_URL_MISC; ?>index.php?m=captcha&c=request&a=chk", key: "captcha", type: "str" }
        }
    };

    var options_validator_form = {
        msg_global:{
            msg: "<?php echo $this->lang['common']['label']['errInput']; ?>"
        }
    };

    var opts_submit_form = {
        ajax_url: "<?php echo BG_URL_PERSONAL; ?>index.php?m=reg&c=request",
        msg_text: {
            submitting: "<?php echo $this->lang['common']['label']['submitting']; ?>"
        }
    };

    $(document).ready(function(){
        var obj_validator_form    = $("#confirm_form").baigoValidator(opts_validator_form, options_validator_form);
        var obj_submit_form       = $("#confirm_form").baigoSubmit(opts_submit_form);
        $(".bg-submit").click(function(){
            if (obj_validator_form.verify()) {
                obj_submit_form.formSubmit();
            }
        });
    });
    </script>

</body>
</html>
