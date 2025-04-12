<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use \DB;

use Mail;

use App\Mail\CustomMailer;

class QuoteController extends Controller
{

    public function AdminEmail($translationId,$paymentId)
    {
        $r =  DB::table('translation_request as tr')
        ->leftJoin('files_information as fi', function ($join) {
            $join->on('fi.id', '=', 'tr.file_id')
                 ->on('fi.request_reference', '=', 'tr.request_reference');
        })
        ->leftJoin('languages as lf', 'lf.id', '=', 'tr.translate_from')
        ->leftJoin('languages as lt', 'lt.id', '=', 'tr.translate_to')
        ->where('tr.id', $translationId)
        ->select('tr.*', 'fi.file_name', 'lf.name as t_from', 'lt.name as t_to')
        ->first();

        $p = DB::table('payment_info')
        ->where('id', $paymentId)
        ->where('request_id', $translationId)
        ->first();

        $serviceType = "";

        if($r->service_type == 1)
        {
            $serviceType = "Translate";
        }
        elseif($r->service_type == 2)
        {
            $serviceType = "Transcribe";
        }

        $estimatedDelivery = "";

        if($r->estimated_delivery == 1)
        {
            $estimatedDelivery = "Standard";
        }
        elseif($r->estimated_delivery == 2)
        {
            $estimatedDelivery = "Priority";
        }
        elseif($r->estimated_delivery == 3)
        {
            $estimatedDelivery = "Urgent";
        }

        $data = [
            'name' => $r->name,
            'email'=> $r->email,
            'phone'=> $r->phone,
            'service_type'=>$serviceType,
            'translate_from'=> $r->t_from,
            'translate_to'=>$r->t_to,
            'number_of_pages'=>$r->number_of_pages,
            'number_of_pages_amount'=>$r->number_of_pages_amount,
            'estimated_delivery'=>$estimatedDelivery,
            'estimated_delivery_amount'=>$r->estimated_delivery_amount,
            'total_amount'=>$r->total_amount,
            'transaction_id'=>$p->transaction_id,
            'amount'=>$p->amount,
            'created_at'=>$p->created_at,
            'status'=>$p->status,
            'currency'=>$p->currency
        ];

        // Specify the path to the attachment (e.g., from public directory)
        $attachmentPath = storage_path('app/public/uploads/'.$r->file_name.'');

        $subject = "New Order Received On Your Website.";

        $view = "emails.adminnotification";

        Mail::to('faizannizami6@gmail.com')->send(new CustomMailer($subject, $view, $data, $attachmentPath));

        return true;
    }

    public function CustomerEmail($translationId,$paymentId)
    {
        $r =  DB::table('translation_request as tr')
        ->leftJoin('files_information as fi', function ($join) {
            $join->on('fi.id', '=', 'tr.file_id')
                 ->on('fi.request_reference', '=', 'tr.request_reference');
        })
        ->leftJoin('languages as lf', 'lf.id', '=', 'tr.translate_from')
        ->leftJoin('languages as lt', 'lt.id', '=', 'tr.translate_to')
        ->where('tr.id', $translationId)
        ->select('tr.*', 'fi.file_name', 'lf.name as t_from', 'lt.name as t_to')
        ->first();

        $p = DB::table('payment_info')
        ->where('id', $paymentId)
        ->where('request_id', $translationId)
        ->first();

        $serviceType = "";

        if($r->service_type == 1)
        {
            $serviceType = "Translate";
        }
        elseif($r->service_type == 2)
        {
            $serviceType = "Transcribe";
        }

        $estimatedDelivery = "";

        if($r->estimated_delivery == 1)
        {
            $estimatedDelivery = "Standard";
        }
        elseif($r->estimated_delivery == 2)
        {
            $estimatedDelivery = "Priority";
        }
        elseif($r->estimated_delivery == 3)
        {
            $estimatedDelivery = "Urgent";
        }

        $data = [
            'name' => $r->name,
            'email'=> $r->email,
            'phone'=> $r->phone,
            'service_type'=>$serviceType,
            'translate_from'=> $r->t_from,
            'translate_to'=>$r->t_to,
            'number_of_pages'=>$r->number_of_pages,
            'number_of_pages_amount'=>$r->number_of_pages_amount,
            'estimated_delivery'=>$estimatedDelivery,
            'estimated_delivery_amount'=>$r->estimated_delivery_amount,
            'total_amount'=>$r->total_amount,
            'transaction_id'=>$p->transaction_id,
            'amount'=>$p->amount,
            'created_at'=>$p->created_at,
            'status'=>$p->status,
            'currency'=>$p->currency
        ];

        // Specify the path to the attachment (e.g., from public directory)
        $attachmentPath = storage_path('app/public/uploads/'.$r->file_name.'');

        $subject = "Your Order Has Been Successfully Placed!";

        $view = "emails.customernotification";

        Mail::to($r->email)->send(new CustomMailer($subject, $view, $data, null));

        return true;
    }

    public function UploadRequestFile(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'file_name' => 'required|file|mimes:docx,doc,xlsx,pptx,txt,xliff,csv,xml,html,pdf,json,bmp,pnm,png,jfif,jpeg,tiff,gif|max:102400',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(), // Return first validation error
            ], 422);
        }

        if ($request->hasFile('file_name')) {

            $request_reference = $request->request_reference;
           
            $file = $request->file('file_name');

            // Generate a unique name for the file
            
            $fileName = time() . '_' . $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            // Store file in 'storage/app/public/uploads'
           // $filePath = $file->storeAs('public/uploads', $fileName);
           $filePath = $file->storeAs('uploads', $fileName, 'public'); 

           DB::beginTransaction();

           $arr = [
            'request_reference'=>$request_reference,
            'file_name'=>$fileName,
            'file_extension'=>$extension,
            'status' => 1,
            'created_at'=> now()
           ];

           $FileInsertId = DB::table('files_information')->insertGetId($arr);

           DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'File uploaded successfully!',
                'file_id'=>$FileInsertId,
                'file_path' => url('storage/'.$filePath.''), 
                'file_extension'=>$extension
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'try again, No file uploaded.',
        ]);
    }

    public function SaveRequest(Request $r)
    {

        // Array
        // (
        //     [service_type_amount] => 0
        //     [number_of_pages_anount] => 50
        //     [estimated_delivery_amount] => 30
        //     [sum_of_all_amount] => 80
        //     [request_reference] => xLaLtzLRHx53YpGOTpQrFGoz10q4mLRH
        //     [who_name] => 1
        //     [service_type] => 1
        //     [translate_from] => 2
        //     [translate_to] => 9
        //     [page_number] => 5
        //     [file_id] => 18
        //     [delivery_type] => 3
        //     [customer_name] => admin
        //     [email] => admin@admin.com
        //     [phone] => 44455
        //     [comments] => this is testing work
        // )
        // print_r($r->all());
        // exit;
        
        $arr_request = [
            'request_reference' => $r->request_reference,
            'file_id' => $r->file_id,
            'who_you_are' => $r->who_name,
            'service_type' => $r->service_type,
            'translation_type' => !empty($r->translation_type) ? $r->translation_type : 0,
            'file_type' => $r->file_type,
            'translate_from' => !empty($r->translate_from)? $r->translate_from : 0,
            'translate_to' => $r->translate_to,
            'number_of_pages' => !empty($r->page_number) ? $r->page_number : 0,
            'number_of_words' => !empty($r->number_of_words) ? $r->number_of_words : 0,
            'number_of_minutes' => !empty($r->number_of_minutes) ? $r->number_of_minutes : 0,
            'estimated_delivery' => $r->delivery_type,
            'estimated_delivery_date' => now(),
            'name' => $r->customer_name,
            'email' => $r->email,
            'phone' => $r->phone,
            'comments' => $r->comments,
            'service_type_amount' => $r->service_type_amount,
            'number_of_pages_amount' => !empty($r->number_of_pages_anount) ? $r->number_of_pages_anount : 0,
            'number_of_word_amount' => !empty($r->number_of_word_anount) ? $r->number_of_word_anount : 0,
            'number_of_minute_amount' => !empty($r->number_of_minute_anount) ? $r->number_of_minute_anount : 0,
            'estimated_delivery_amount' => $r->estimated_delivery_amount,
            'total_amount' => $r->sum_of_all_amount,
            'created_at' => now() 
        ];

        DB::beginTransaction();

            $rid = DB::table('translation_request')->insertGetId($arr_request);

            DB::table('files_information')
            ->where('id',$r->file_id)
            ->where('request_reference',$r->request_reference)
            ->update([

                'request_id'=>$rid

            ]);

        DB::commit();
        
        

        $isReqSub = 0;

        if(!empty($r->translation_type) && $r->translation_type > 0)
        {
            $isReqSub = 1;
        }

        if(!empty($r->page_number) && $r->page_number > 10)
        {
            $isReqSub = 1;
        }

        return response()->json([
            'success' => true,
            'message' => 'File uploaded successfully!',
            'request_id' => $rid,
            'request_submission' => $isReqSub,
        ]);
    }

    public function SavePaymentInfo(Request $r)
    {
        $dataPayment = [
            'request_id' => $r->RequestID,
            'payer_name' => $r->payerName,
            'payer_email' => $r->payerEmail,
            'payer_id' => $r->payerID,
            'transaction_id' => $r->transactionID,
            'status' => $r->status,
            'amount' => $r->purchaseAmount,
            'currency' => $r->currencyCode,
            'created_at' => $r->createTime
        ];

        DB::beginTransaction();

        $paymentId = DB::table('payment_info')->insertGetId($dataPayment);

        DB::table('translation_request')
        ->where('id',$r->RequestID)
        ->update([
            'is_paid'=>1,
            'payment_info_id'=>$paymentId,
            'payment_status'=>$r->status
        ]);

        DB::commit();

        // $this->AdminEmail($r->RequestID,$paymentId);

        // $this->CustomerEmail($r->RequestID,$paymentId);

        return response()->json(['code'=>200]);
        
    }

    public function EmailTest()
    {
        $this->CustomerEmail(10,9);
    //     // $data = [
    //     //     'name' => 'John Doe'
    //     // ];

    //     // // Specify the path to the attachment (e.g., from public directory)
    //     // $attachmentPath = storage_path('app/public/uploads/1742148188_sample-word-02.pdf');

    //     // Mail::to('codewithar360@gmail.com')->send(new CustomMailer($data, $attachmentPath));

    //    return "Email with attachment sent successfully!";
    }
    
}
