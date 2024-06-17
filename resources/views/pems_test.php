<?php

if (!empty($data['sales_info'])) {
            $url = base_url('frontend/view_invoice/') . url_encode($id);
            $data['qrcode'] = 'dloelsleoollslleolsoe';
            //generate_qrcode($url);

            $payment_status = $this->invoice_model->get_payment_status($id);
            $data['sales_info']->ref_no = lang('invoice') . ' : ' . $data['sales_info']->reference_no;
            $data['sales_info']->start_date = lang('invoice_date') . ' : ' . display_date($data['sales_info']->invoice_date);
            // check overdue invoice
            if (strtotime($data['sales_info']->due_date) < strtotime(date('Y-m-d')) && $payment_status != lang('fully_paid') && $payment_status != lang('cancelled')) {
                // check overdue how many days from due_date
                $date1 = new DateTime($data['sales_info']->due_date);
                $date2 = new DateTime(date('Y-m-d'));
                $interval = $date1->diff($date2);
                $overdue_days = $interval->format('%a');
                $data['sales_info']->overdue_days = lang('invoice_overdue') . ' ' . lang('by') . ' ' . $overdue_days . ' ' . lang('days');
            }
            $data['sales_info']->end_date = lang('due_date') . ' : ' . display_date($data['sales_info']->due_date);
            if (!empty($data['sales_info']->user_id)) {
                $data['sales_info']->sales_agent = lang('sales') . ' ' . lang('agent') . ' : ' . fullname($data['sales_info']->user_id);
            }
            if ($payment_status == lang('fully_paid')) {
                $label = "success";
            } elseif ($payment_status == lang('draft')) {
                $label = "default";
                $text = lang('status_as_draft');
            } elseif ($payment_status == lang('cancelled')) {
                $label = "danger";
            } elseif ($payment_status == lang('partially_paid')) {
                $label = "warning";
            } elseif ($data['sales_info']->emailed == 'Yes') {
                $label = "info";
                $payment_status = lang('sent');
            } else {
                $label = "danger";
            }
            $data['sales_info']->status = lang('status') . ' :  <span class="label label-' . $label . '">' . lang($payment_status) . '</span>';
            if (!empty($text)) {
                $data['sales_info']->status .= '<br><p style="padding: 15px;margin-bottom: 20px;border: 1px solid transparent;border-radius: 4px;;background: color: #8a6d3b;background-color: #fcf8e3;border-color: #faebcc;">' . $text . '</p>';
            }
            $data['sales_info']->custom_field = '';
            $show_custom_fields = custom_form_label(9, $data['sales_info']->invoices_id);
            if (!empty($show_custom_fields)) {
                foreach ($show_custom_fields as $c_label => $v_fields) {
                    if (!empty($v_fields)) {
                        $data['sales_info']->custom_field .= $c_label . ' : ' . $v_fields . '<br>';
                    }
                }
            }
            $data['all_items'] = $this->invoice_model->ordered_items_by_id($data['sales_info']->invoices_id);
            $data['sales_info']->sub_total = ($this->invoice_model->calculate_to('invoice_cost', $data['sales_info']->invoices_id));
            $data['sales_info']->discount = ($this->invoice_model->calculate_to('discount', $data['sales_info']->invoices_id));
            $data['sales_info']->total = ($this->invoice_model->calculate_to('total', $data['sales_info']->invoices_id));
            $data['paid_amount'] = $this->invoice_model->calculate_to('paid_amount', $data['sales_info']->invoices_id);
            $data['invoice_due'] = $this->invoice_model->calculate_to('invoice_due', $data['sales_info']->invoices_id);
            $data['payment_status'] = $payment_status;
            if ($payment_status != lang('cancelled') && $payment_status != lang('fully_paid')) {
                $this->load->model('credit_note_model');
                $data['total_available_credit'] = $this->credit_note_model->get_available_credit_by_client($data['sales_info']->client_id);
            }
            // get payment info by id
            $data['all_payment_info'] = get_result('tbl_payments', array('invoices_id' => $id));
            $data['footer'] = config_item('invoice_footer');
        } else {
            set_message('error', 'No data Found');
            redirect('admin/invoice/manage_invoice');
        }
        if (!empty($pdf)) {
            $this->common_model->sales_pdf($data, $pdf);
        }
