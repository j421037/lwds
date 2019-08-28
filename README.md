# 坑 
- discuz自动清理缓存的方案: wx/FuckDiscuz::AutoClearTemplateCache()
- 模板中解析块的核心方法： source/function/function_block.php中的block_fetch_content()方法
- block查询的方法：source/function/function_block.php中的block_get_batch()方法
- ./source/class/table/下的类对应各种表模型
- pre_common_block表 存放block 模板的声明
- pre_common_block_item表 对应block的具体内容
- 当页面block_item渲染之后，function_block.php 中的block_updateitem() 方法有可能会触发，接着调用table_common_block_item.php中的insert_batch()方法，导致当前页面的数据更新到pre_common_block_item表，造成翻译的语言参杂