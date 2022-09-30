<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>(string)$this->id,
            'type'=>'Asset',
            'attributes'=>[
                'name'=>$this->name,
                'status'=>$this->status,
                'Received_by'=>$this->user->name,
                'Category'=>$this->category->name,
                'Vendor'=>$this->vendor->name,
                'Brand'=>$this->brand->name,
                // 'Staff'=>$this->staff->name,
                // 'QrCode'=>$this->barcodes,
                'Asset Code'=>$this->asset_code,
                'created_at'=>$this->created_at,
                'updated_at'=>$this->updated_at,
            ]
        ];
    }
}
