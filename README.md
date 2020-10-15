# 复现问题

## 背景

1. 使用 phpdbg 跑单元测试
2. 使用 phpdbg 收集单元测试覆盖率

## 命令

```bash
composer run dbg

composer run dbg-coverage
```

## 现象

如果启用  `--coverage-text` 等收集单元测试覆盖率的参数之后，会出现自动加载异常的情况。
即 `App\Service\TestService` 类应该加载 `runtime/container/proxy/App_Controller_AbstractController.proxy.php` 文件
但是实际情况是 加载了 `app/Service/TestService.php` 文件。 
