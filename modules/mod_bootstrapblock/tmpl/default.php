<?php
/**
 * @version     1.1
 * @package     mod_bootstrapblock
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Brad Traversy <support@bootstrapjoomla.com> - http://www.bootstrapjoomla.com
 */
//No Direct Access
defined('_JEXEC') or die;
?>
<style>
	.bootstrap_block h3{color:<?php echo $headingtextcolor; ?>;}
	.bootstrap_block p{color:<?php echo $paragraphtextcolor; ?>;}
</style>
<div class="bootstrap_block <?php echo $moduleclass_sfx; ?>">
    <h3>
        <?php if($show_glyphicon) : ?>
            <span class="<?php echo $glyphicon; ?>"></span>
        <?php endif; ?>

        <?php echo $headingtext; ?>
    </h3>
    <p><?php echo $paragraphtext; ?></p>


    <form>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Order By</label> <!-- Dynamic -->
            <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                <option>Newest to Oldest</option>
                <option>Oldest to Newest</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="name@makeitall.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Problem ID</label>
            <input type="text" class="form-control form-control-sm" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Problem Type</label> <!-- Dynamic -->
            <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                <option>Printing</option>
                <option>Printer</option>
            </select>
        </div>
    </form>



    <?php if($show_read_more) : ?>
        <a class="readmore <?php echo $buttonstyle; ?>" href="<?php echo $read_more_link; ?>"><?php echo $read_more_text; ?></a>
    <?php endif; ?>

</div>
