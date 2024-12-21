<?php

namespace App\Http\Controllers\frontend;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Brands;
use App\Models\Countries;
use App\Models\Products;
use ReCaptcha\ReCaptcha;
use App\Models\ContactUs;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Products::where('status',1)->get();
        return view('pages.frontend.home',compact('products'));
    }

    public function comingSoon()
    {
        //echo 'Test';
        return view('pages.commingsoon');
    }

    public function about(Request $request){
        return view('pages.frontend.about');
    }

    public function contact(Request $request){
        return view('pages.frontend.contact');
    }

    public function products(Request $request){
        $products = Products::where('status',1)->get();
        $category = '';
        $categoryName = '';

        return view('pages.frontend.products', compact('products','category'));
    }

    public function contactSubmit(Request $request){
        $messageType = '';
        $message = '';

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required'
        ]);

        if ($validator->fails()) {
            $messageType = 'error';
            $message = implode(', ', $validator->errors()->all());
        } else {

            $recaptcha = new ReCaptcha(env('RECAPTCHA_SECRET'));
            $response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());
            if (!$response->isSuccess()) {
                return response()->json([
                    'messageType' => 'error',
                    'message' => 'Invalid reCAPTCHA.'
                ], 422);
            }

            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'asia03.lhws.net'; // Replace with your SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = 'info@insyncsafety.com'; // Replace with your email
                $mail->Password = 'Info@456123'; // Replace with your password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom(''.$request->email.'', 'Contact Form - '.$request->name.'');
                $mail->addAddress('info@insyncsafety.com'); // Replace with owner's email

                $mail->isHTML(true);
                $mail->Subject = 'New Contact Form Submission';
                $mail->Body = '<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">

<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Poppins", sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    We are thrilled to have you here! Get ready to dive into your new account.
</div>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center">

            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 40px 10px 10px 10px;">
                        <a href="#" target="_blank" style="text-decoration: none;">
							<span style="display: block; font-family: "Poppins", sans-serif; color: #3e8ef7; font-size: 36px;" border="0"><img src="http://insyncsafety.com/public/assets/img/insyncsafety_logo.jpg" width="50%"/></span>
                        </a>
                    </td>
                </tr>
            </table>

            </td>
            </tr>
            </table>

        </td>
    </tr>

    <tr>
        <td align="center" style="padding: 0px 10px 0px 10px;">

            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
                      <h1 style="font-size: 36px; font-weight: 600; margin: 0;">Insyncsafety - Contact Details</h1>
                    </td>
                </tr>
            </table>

            </td>
            </tr>
            </table>

        </td>
    </tr>

    <tr>
        <td align="center" style="padding: 0px 10px 0px 10px;">

            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                <tr>
                  <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 25px;">
                    <p style="margin: 0;"><span style="color: #047bfd;font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400;"><u>Contact Details</u></span></p>
                    <p style="margin: 0;font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400;"><span style="font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400;"><b>Name:</b></span> '.$request->name.'</p>
                    <p style="margin: 0;font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400;"><span style="font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400;"><b>Email:</b></span> '.$request->email.'</p>
                    <p style="margin: 0;font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400;"><span style="font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400;"><b>Description:</b></span> '.$request->message.'</p>

                  </td>
                </tr>

              <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                  <p style="margin: 0;">If you have any questions, just reply to this email—we are always happy to help out.</p>
                </td>
              </tr>

              <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 0px 0px; color: #666666; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                  <p style="margin: 0;">Cheers,<br>Insyncsafety</p>
                </td>
              </tr>
            </table>

            </td>
            </tr>
            </table>

        </td>
    </tr>

    <tr>
        <td align="center" style="padding: 10px 10px 50px 10px;">

            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">


              <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #aaaaaa; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                  <p style="margin: 0;">If you did not receive this email, please check your spam or Junk mail folder.</p>
                </td>
              </tr>



              <tr>
                <td align="center" style="padding: 30px 30px 30px 30px; color: #333333; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                  <p style="margin: 0;">Copyright © '.date('Y').' Insyncsafety. All rights reserved.</p>
                </td>
              </tr>
            </table>

            </td>
            </tr>
            </table>

        </td>
    </tr>
</table>

</body>';

                if($mail->send()){

                    ContactUs::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'message' => $request->message,
                    ]);
                    return response()->json(['messageType' => 'success', 'message' => 'Message sent successfully.']);
                }else{
                    return response()->json(['messageType' => 'error', 'message' => 'Email sending failed.']);
                }

            } catch (Exception $e) {
                return response()->json(['messageType' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"], 500);
            }

        }

        $responseData = [
            'message' => $message,
            'messageType' => $messageType,
        ];

        return response()->json($responseData);
    }

    public function categoryList(Request $request, $category_name)
    {
        // Format the category name
        $categoryName = ucwords(str_replace('-', ' ', $category_name));

        // Fetch the category
        $category = Categories::where('status', 1)
            ->where('name', 'LIKE', '%' . $categoryName . '%')
            ->first();

        //dd($category);
        // If category not found, return 404
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        // Fetch products for the category
        $category_id = $category->id;
        $products = Products::where('status', 1)
            ->where('category_id', $category_id)
            ->get();

        //dd($products);
        // Return the view with products
        return view('pages.frontend.products', compact('products', 'category'));
    }


    public function singleProduct(Request $request,$slug){
        $random_products = Products::where('status',1)->inRandomOrder()->limit(120)->get();
        $random_categories = Categories::where('status',1)->withCount('products')->inRandomOrder()->limit(5)->get();
        $product_details = Products::where('status',1)->where('slug','LIKE','%'.$slug.'%')->first();
        $brands = Brands::where('status',1)->get();
        // dd($random_categories);
        return view('pages.frontend.singleproduct', compact('product_details','brands','random_products','random_categories'));
    }

    public function fetchProducts(Request $request){

        $query = Products::query();
        //$getAllRoutePermisssions = AcAccounts::all();
        //s_code s_name s_status s_type search_customer_id
        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', '=', $request->category_id);
        }

        $query->where('status', 1);

        $query->orderBy('id', 'DESC');
        $query->limit(120);

        $fetchTableDetails = $query->get();
        //$fetchTableDetails = Currencies::all();

        $responses = '';
        $debit_total = 0;
        $credit_total = 0;

        $sqlQuery = $query->toSql();
        $bindings = $query->getBindings();
        $testQuery = vsprintf(str_replace('?', '%s', $sqlQuery), $bindings);

            // dd(vsprintf(str_replace('?', '%s', $sqlQuery), $bindings));
        $fetchTableDetails = $query->paginate(18);
        $responses = view('pages.frontend.tables.fetch_products', compact('fetchTableDetails'))->render();

        return response()->json(['html' => $responses,'testQuery' => $testQuery]);
    }
}
