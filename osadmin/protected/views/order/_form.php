<div class="row-fluid">
    <div class="tab-pane active" id="Information">
            <div class="span12">
                <fieldset class="portlet" >
                    <div class="portlet-decoration arrow-minus" onclick=" $('#hide_box_line4').slideToggle();">
                        <div class="span11"><?php echo yii::t('orders','heading_sub_title');?> </div>
                        <div class="span1 Dev-arrow"><button class="btn btn-info arrow_main" type="button"></button> </div>
                        <div class="clearfix"></div>	
                    </div>
                     <div class="portlet-content" id="hide_box_line4">
                       <div class="span5"> <?php
                        echo $form->textFieldRow(
                                $model['o'], 'firstname',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        ); ?></div>
                      <div class="span5"> <?php  
                        echo $form->textFieldRow(
                                $model['o'], 'lastname',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'telephone',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
 
                         <div class="span5">  <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'email_address',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5">  <?php 
                        echo $form->textFieldRow(
                                $model['o'], 'message',
                                array('rel' => 'tooltip','data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5">  <?php 
                        echo $form->textFieldRow(
                                $model['o'], 'billing_firstname',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5">  <?php 
                        echo $form->textFieldRow(
                                $model['o'], 'billing_lastname',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5">  <?php 
                        echo $form->textFieldRow(
                                $model['o'], 'billing_company',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5">    <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'billing_address_1',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5">  <?php 
                        echo $form->textFieldRow(
                                $model['o'], 'billing_address_2',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5">  <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'billing_city',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5">  <?php 
                        echo $form->textFieldRow(
                                $model['o'], 'billing_postcode',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'billing_state',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'billing_country',
                                array('rel' => 'tooltip','data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'payment_method',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                          echo $form->textFieldRow(
                                $model['o'], 'delivery_firstname',
                                array('rel' => 'tooltip','data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_lastname',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_company',
                                array('rel' => 'tooltip','data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                          echo $form->textFieldRow(
                                $model['o'], 'delivery_address_1',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_address_2',
                                array('rel' => 'tooltip','data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_city',
                                array('rel' => 'tooltip','data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_postcode',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_state',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                           echo $form->textFieldRow(
                                $model['o'], 'delivery_country',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'shipping_method',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_firstname',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                          echo $form->textFieldRow(
                                $model['o'], 'delivery_lastname',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_company',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_address_1',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                          echo $form->textFieldRow(
                                $model['o'], 'delivery_address_2',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_city',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_postcode',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                          echo $form->textFieldRow(
                                $model['o'], 'delivery_state',
                                array('rel' => 'tooltip','data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_country',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'date_modified',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5">  <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_firstname',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_lastname',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_company',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                        echo $form->textFieldRow(
                                $model['o'], 'delivery_address_1',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_address_2',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_city',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_postcode',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                          echo $form->textFieldRow(
                                $model['o'], 'delivery_state',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_country',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_firstname',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_lastname',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_company',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                        echo $form->textFieldRow(
                                $model['o'], 'delivery_address_1',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_address_2',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_city',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'delivery_postcode',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                          echo $form->textFieldRow(
                                $model['o'], 'delivery_state',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                        echo $form->textFieldRow(
                                $model['o'], 'delivery_country',
                                array('rel' => 'tooltip','data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'shipping_method',
                                array('rel' => 'tooltip',  'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                          echo $form->textFieldRow(
                                $model['o'], 'date_created',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'order_status_name',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );?> </div>
                         <div class="span5"> <?php 
                         echo $form->textFieldRow(
                                $model['o'], 'total',
                                array('rel' => 'tooltip', 'data-toggle' => "tooltip",
                            'data-placement' => "right",)
                        );

                        //exit;
                        ?></div>


                    </div>

                    <div class="span12 pull-right" id="option_value">

                        <?php
                        $box = $this->beginWidget(
                                'bootstrap.widgets.TbBox',
                                array(
                            'title' => 'Add/Edit Options',
                            'htmlOptions' => array('class' => 'portlet-decoration	')
                                )
                        );
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Sort Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $row = 0;
                            foreach ($model['ov'] as $model):
                                ?>
                                <tbody id='row-<?php echo $row; ?>'>
                                    <tr >
                                <input type='hidden' name='option_value[<?php echo $row; ?>][option_value_id]' value="<?php echo $model->id_option_value; ?>">
                                <td style="width: 60px"><?php echo CHtml::textField('option_value[' . $row . '][name]',
                                        $model->name,
                                        array('width' => 100, 'maxlength' => 100)); //echo $form->textField($model,'name',array('size'=>80,'maxlength'=>128)); 
                                ?></td>
                                <td></td>
                                <td><?php echo CHtml::textField('option_value[' . $row . '][sort_order]',
                                        $model->optionvalue->sort_order,
                                        array('width' => 100, 'maxlength' => 100));
                                ?></td>
                                <td> <a href="#" onclick="$('#row-<?php echo $row; ?>').remove()">Delete</a> </td>
                                </tr>
                                </tbody>
                                            <?php
                                            $row++;
                                        endforeach;
                                        ?>
							<tfoot>
                                <tr>
                                    <td colspan="5"><?php
                                        $this->widget(
                                                'bootstrap.widgets.TbButton',
                                                array(
                                            'label' => 'Add ',
                                            'type' => 'btn-info',
                                            'htmlOptions' => array('onclick' => 'addOption()'),
                                                )
                                        );
                                        ?></td>
                                </tr>
                            </tfoot>
                        </table>
<?php $this->endWidget(); ?>
                    </div>
                </fieldset>

            </div>   
    </div>
    <script type='text/javascript'>
        var row_no =<?php echo $row; ?>;
        function addOption()
        {
            row = '<tbody id="row-' + row_no + '">';
            row += '<tr>';
            row += '<input type="hidden" value="" name="option_value[' + row_no + '][option_value_id]">';
            row += '<td style="width: 60px"><input width="100" type="text" id="option_value_1_name" name="option_value[' + row_no + '][name]" value="" maxlength="100"></td>';
            row += '<td></td>';
            row += '<td><input width="100" type="text" id="option_value_1_sort_order" name="option_value[' + row_no + '][sort_order]" value="" maxlength="100"></td>';
            row += '<td> <a onclick="$(\'#row-' + row_no + '\').remove();" href="#">Delete</a> </td>';
            row += '</tr>';
            row += '</tbody>';
            $('.table tfoot').before(row);
            row_no++;
        }

        $('select[id=\'Option_type\']').bind('change', function() {
            if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
                $('#option_value').show();
            } else {
                $('#option_value').hide();
            }
        });
    </script>