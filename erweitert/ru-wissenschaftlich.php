    <tr style="background-color: rgb(238, 238, 238);">
      <td>
	  <p><?php echo $erw_kirchen?></p>
	  </td>
      <td
 style="text-align: right;"
>
	  <select size="2"  class="raender form-control" style="width:auto;"  name="ru_wissenschaftlich_kirch" size="3">
      <option value="rus"<?php if  ($ru_wissenschaftlich_kirch == "rus") {echo" selected";} echo"> $erw_rus" ?></option>
      <option value="alt"<?php if  ($ru_wissenschaftlich_kirch == "alt") {echo" selected";} echo"> $erw_alt" ?></option>
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
	  <select size="2"  class="raender form-control" style="width:auto;"  name="ru_wissenschaftlich_omega" size="3">
      <option value="1"<?php if  ($ru_wissenschaftlich_omega == "1") {echo" selected";} ?>>Ô (<?php echo $standard ?>)</option>
      <option value="0"<?php if  ($ru_wissenschaftlich_omega == "0") {echo" selected";} ?>>O</option>
	  </select>
	  </td>
    </tr>
  </tbody>
</table>
