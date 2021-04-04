<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function like($micropostId)
    {
        // すでにフォローしているかの確認
        $exist = $this->is_like($micropostId);
        
        if ($exist || $its_me) {
            // すでにフォローしていれば何もしない
            return false;
        } else {
            // 未フォローであればフォローする
            $this->favorite()->attach($micropostId);
            return true;
        }
    }
    
    public function unlike($micropostId)
    {
        // すでにフォローしているかの確認
        $exist = $this->is_like($micropostId);

        if ($exist && !$its_me) {
            // すでにフォローしていればフォローを外す
            $this->favorite()->detach($micropostId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }
    
    public function is_favorite($micropostId)
    {
        // フォロー中ユーザの中に $userIdのものが存在するか
        return $this->favorite()->where('micropost_id', $micropostId)->exists();
    }
}

