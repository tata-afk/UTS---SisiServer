<?php

namespace App\Http\Resources;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemSummaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $items = Item::all();
        $avgPriceItems = Item::avg('price');

        $data = [];
        foreach ($items as $item) {
            $data[] = [
                'nama' => $item->name,
                'stok_item' => $item->quantity,
                'total_nilai_stok' => $item->quantity * $item->price,
                'avg_harga' => $avgPriceItems,
            ];
        }

        return $data;
    }
}
