<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'send_user_id',
        'company',
        'name',
        'tel',
        'email',
        'content',
    ];

    public function user(): belongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function sendUser(): belongsToMany
    {
        return $this->belongsToMany(User::class, 'send_user_id');
    }

    public function store($validated)
    {

        $inquiry = new Inquiry;

        try {
            DB::beginTransaction();
            $inquiry->create([
                'user_id' => 1,
                'send_user_id' => $validated['user'],
                'company' => $validated['company'],
                'name' => $validated['name'],
                'tel' => $validated['tel'],
                'email' => $validated['email'],
                'content' => $validated['content'],
            ]);
            DB::commit();
            return true;
        } catch (QueryException $e) {
            Log::error("お問い合わせの登録に失敗しました。".$e->getMessage());
            DB::rollBack();
            return false;
        }
    }
}
