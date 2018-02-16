<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 10:41 AM
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ClientTestimonialService;

class ClientTestimonialController extends Controller
{
    private $clientTestimonialService;

    public function __construct(ClientTestimonialService $clientTestimonialService){
        $this->clientTestimonialService = $clientTestimonialService;
    }

    public function index(){
        $testimonials = $this->clientTestimonialService->getAllTestimonials();
        return view('admin.testimonials',compact('testimonials'));
    }

    public function create(){
        return view('admin.testimonial');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "image" => 'required',
            "testimonial" => "required",
            "companyName" => "required",
            "designation" => "required"
        ]);
        $result = $this->clientTestimonialService->addTestimonial($request);
        if($result){
            return redirect()->route('testimonials.index')->with('success-msg', 'Testimonials added successfully.');
        }else{
            return redirect()->route('testimonials.index')->with('error-msg', 'Please check the form and submit again.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "testimonial" => "required",
            "companyName" => "required",
            "designation" => "required"
        ]);
        $result = $this->clientTestimonialService->updateTestimonial($request, $id);
        if($result){
            return redirect()->route('testimonials.edit',['testimonials'=>$id])->with('success-msg', ' Testimonials updated successfully.');
        }else{
            return redirect()->route('testimonials.edit',['testimonials'=>$id])->with('error-msg', 'Something went wrong.');
        }
    }

    public function edit($id){
        $testimonial = $this->clientTestimonialService->getActiveTestimonial($id);
        return view('admin.testimonial',compact('testimonial'));
    }

}