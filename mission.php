<?php
class GravityEngine {
    private array $steps = [];

    public function spinFlywheel(): self { $this->steps[] = 'FLYWHEEL'; return $this; }
    public function stabilizeRotor(): self { $this->steps[] = 'ROTOR'; return $this; }

    public function ignite(): void {
        echo "=== コロニー重力管制室 ===\n";
        usleep(500000);

        if (in_array('FLYWHEEL', $this->steps) && in_array('ROTOR', $this->steps)) {
            echo "🌍 【重力復旧】フライホイールとローターが同期。人工重力1.0G安定！\n";
        } else {
            echo "🌌 【浮遊中】起動シーケンス未完了。手順が不足しています。\n";
            exit(1);
        }
    }
}

$engine = new GravityEngine();
// ==========================================
// 【指示】下の1行を各自のメソッド呼び出しに書き換えろ！
// 担当A: $engine->spinFlywheel();
// 担当B: $engine->stabilizeRotor();
$engine->spinFlywheel(); // ← これは間違い、書き換えろ
$engine->stabilizeRotor(); // ← これは間違い、書き換えろ
// ==========================================

$engine->ignite();
