<?php
// Protection to avoid direct call of template
if (empty($conf) || ! is_object($conf))
{
	print "Error, template page can't be called as URL";
	exit;
}

?>
<!-- BEGIN PHP TEMPLATE FORM TO AUTOMOBILE MANUFACTURER MODULE  automobilemanufacturermodule_add_manufacturer.tpl.php -->
<?php
    $form = 
        '<tbody>
            <tr id="field_ref">
                <td class="titlefieldcreate fieldrequired">'.$langs->trans('Ref').'</td>
                <td>
                    <input type="text" class="flat minwidth400 maxwidthonsmartphone" name="ref" id="ref" maxlength="128" value="">
                </td>
            </tr>
            <tr id="field_name">
                <td class="titlefieldcreate fieldrequired">'.$langs->trans('Name').'</td>
                <td><input type="text" class="flat minwidth200 maxwidthonsmartphone" name="name" id="name" maxlength="30" value=""></td>
            </tr>
            <tr id="field_description">
                <td class="titlefieldcreate">'.$langs->trans('Description').'
                    <div class="inline-block"><div class="classfortooltip inline-block inline-block" style="padding: 0px; padding: 0px; padding-right: 3px !important;" title="'.$langs->trans('HelpTextDescription').'"><img src="/dolibarr/htdocs/theme/eldy/img/info.png" alt="" style="vertical-align: middle; cursor: help"></div></div>
                </td>
                <td>
                    <textarea id="description" name="description" rows="5" style="margin-top: 5px; width: 90%" class="flat"></textarea>
                </td>
            </tr>
            <tr id="field_status">
                <td class="titlefieldcreate fieldrequired">'.$langs->trans('Status').'</td>
                <td><select class="flat minwidth100 maxwidthonsmartphone" name="status" id="status"><option value="0">&nbsp;</option><option value="0">Rascunho</option><option value="1">Ativo</option><option value="-1">Cancelado</option></select></td>
            </tr>
        </tbody>';
    print $form;
?>
<!-- END PHP TEMPLATE FORM TO AUTOMOBILE MANUFACTURER MODULE  automobilemanufacturermodule_add_manufacturer.tpl.php -->
