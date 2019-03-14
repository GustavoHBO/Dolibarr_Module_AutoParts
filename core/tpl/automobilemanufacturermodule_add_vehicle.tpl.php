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
            <tr id="field_label">
                <td class="titlefieldcreate">'.$langs->trans('Tag').'
                    <div class="inline-block"><div class="classfortooltip inline-block inline-block" style="padding: 0px; padding: 0px; padding-right: 3px !important;" title="'.$langs->trans('HelpTextTag').'"><img src="/dolibarr/htdocs/theme/eldy/img/info.png" alt="" style="vertical-align: middle; cursor: help"></div></div>
                </td>
                <td>
                    <input type="text" class="flat minwidth400 maxwidthonsmartphone" name="label" id="label" maxlength="255" value="">
                </td>
            </tr>
            <tr id="field_name">
                <td class="titlefieldcreate fieldrequired">'.$langs->trans('Name').'</td>
                <td><input type="text" class="flat minwidth200 maxwidthonsmartphone" name="name" id="name" maxlength="30" value=""></td>
                
            </tr>
            <tr>
                <td class="titlefieldcreate fieldrequired">'.$langs->trans('Manufacture').'</td>
                <td>
                    <select name="fk_automobilemanufacturer">';
    $db->begin();   // Start transaction
    $resql = $db->query("SELECT `name`, `rowid` FROM `llx_productautoparts_automobilemanufacturer`;");
    for ($i = 1; $i <= $db->num_rows($resql); $i++){
        $row = $resql->fetch_assoc();
        $form .=  '<option value="'.$row['rowid'].'">'.$row['name'].'</option>';
    }
    $form .= '      </select>
                </td>
            </tr>
            <tr id="field_year_model">
                <td class="titlefieldcreate fieldrequired">'.$langs->trans('YearModel').'</td>
                <td>
                    <select name="year_model_start" id="select_year_model"></select>
                </td>
                <td>
                    <select name="year_model_end" id="select_year_model_end">
                        <option value="...">...</option>
                    </select>
                </td>
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
    $form .= '<script>
                    var select = document.getElementById("select_year_model");
                    option = document.createElement("option");
                    option.value = "...";
                    option.text = "...";
                    select.add(option, select.options[i]);
                    for(var i = '.date('Y').'; i>= 1900; i--){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select.add(option, select.options[i]);
                    }
                     select.onclick= function() {
                        let select_end = document.getElementById("select_year_model_end");
                        while (select_end.length) {
                            select_end.remove(0);
                        }
                        option = document.createElement("option");
                        i=0;
                        option.value = "...";
                        option.text = "...";
                        select_end.add(option, select_end.options[i]);
                        for (i = '.date('Y').'; i>= select.value; i--){
                            option = document.createElement("option");
                            option.value = i;
                            option.text = i;
                            select_end.add(option, select_end.options[i]);
                        } 
                     }
            </script>';
    print $form;
?>
<!-- END PHP TEMPLATE FORM TO AUTOMOBILE MANUFACTURER MODULE  automobilemanufacturermodule_add_manufacturer.tpl.php -->
