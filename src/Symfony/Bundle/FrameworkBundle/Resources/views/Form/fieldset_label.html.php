<?php if (false !== $label): ?>
    <?php if (!$label) { $label = $view['form']->humanize($name); } ?>
    <legend <?php foreach ($label_attr as $k => $v) { printf('%s="%s" ', $view->escape($k), $view->escape($v)); } ?>><?php echo $view->escape($view['translator']->trans($label, array(), $translation_domain)) ?></legend>
<?php endif ?>
