    <tr style="background-color: rgb(238, 238, 238);">
      <td>
	  <p><?php echo $erw_ru_isor9_ausn_ch ?></p>
	  </td>
      <td
 style="text-align: right;"
>
	  <select size="2"  class="raender form-control" style="width:auto;" form-control"  name="ru_isor9_ch" size="3">
      <option value="h"<?php if  ($ru_isor9_ch == "h") {echo" selected";} echo ">$erw_nein_st"?></option>
      <option value="ch"<?php if  ($ru_isor9_ch == "ch") {echo" selected";} echo ">$erw_ja"?></option>
	  </select>
	  </td>

    </tr>
    <tr style="background-color: rgb(223, 223, 223);">
      <td>
	  <p><?php echo $erw_ru_isor9_ausn_en ?></p>
	  </td>
      <td
 style="text-align: right;"
>
	  <select size="2"  class="raender form-control" style="width:auto;" form-control"  name="ru_isor9_ausn" size="3">
      <option value="0"<?php if  ($ru_isor9_ausn == "0") {echo" selected";} echo ">$erw_nein_st"?></option>
      <option value="1"<?php if  ($ru_isor9_ausn == "1") {echo" selected";} echo ">$erw_ja"?></option>
	  </select>  
	  </td>
    </tr>
    <tr style="background-color: rgb(238, 238, 238);">
      <td>
	  <p><?php echo $erw_kirchen?></p>
	  </td>
      <td
 style="text-align: right;"
>
	  <select size="2"  class="raender form-control" style="width:auto;" form-control"  name="ru_isor9_kirch" size="3">
      <option value="rus"<?php if  ($ru_isor9_kirch == "rus") {echo" selected";} ?>><?php echo $erw_rus ?></option>
      <option value="alt"<?php if  ($ru_isor9_kirch == "alt") {echo" selected";} ?>><?php echo $erw_alt ?></option>
	  </select>
	  </td>
    </tr>
	 <tr style="background-color: rgb(223, 223, 223);">
      <td>
	  <p><?php echo $erw_ru_isor9_omega ?></p>
	  </td>
      <td
 style="text-align: right;"
>
	  <select size="2"  class="raender form-control" style="width:auto;" form-control"  name="ru_isor9_omega" size="3">
      <option value="1"<?php if  ($ru_isor9_omega == "1") {echo" selected";} ?>>Ô (<?php echo $standard ?>)</option>
      <option value="0"<?php if  ($ru_isor9_omega == "0") {echo" selected";} ?>>O</option>
	  </select>
	  </td>

    </tr>
  </tbody>
</table>
