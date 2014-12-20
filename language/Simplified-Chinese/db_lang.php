<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = '无法根据提交的连接字符串确定数据库设置。  ';
$lang['db_unable_to_connect'] = '无法使用提供的设置连接到数据库服务器。';
$lang['db_unable_to_select'] = '无法选择指定的数据库： %s';
$lang['db_unable_to_create'] = '无法创建指定的数据库：%s';
$lang['db_invalid_query'] = '提交的查询无效。';
$lang['db_must_set_table'] = '查询中必须设置要查询的表名。';
$lang['db_must_use_set'] = '更新数据请使用 Set 方法。';
$lang['db_must_use_index'] = '必须指定索引以匹配批量更新。';
$lang['db_batch_missing_index'] = '批量更新操作中一个或多个行缺少指定的索引。';
$lang['db_must_use_where'] = '更新操作必须包含 Where 条件。';
$lang['db_del_must_use_where'] = '删除操作必须包含 Where 或 Like 条件。';
$lang['db_field_param_missing'] = '获取字段需要指定表名。';
$lang['db_unsupported_function'] = '功能不被您当前使用的数据库支持。';
$lang['db_transaction_failure'] = '事务失败：执行回滚。';
$lang['db_unable_to_drop'] = '无法删除指定的数据库。';
$lang['db_unsupported_feature'] = '特性不被您当前使用的数据库支持。  ';
$lang['db_unsupported_compression'] = '您选择的文件压缩格式不被服务器支持。  ';
$lang['db_filepath_error'] = '提交的文件路径无法写入。  ';
$lang['db_invalid_cache_path'] = '提交的缓存路径无效或无法写入。';
$lang['db_table_name_required'] = '操作需要指定表名。 ';
$lang['db_column_name_required'] = '操作需要指定列名。  ';
$lang['db_column_definition_required'] = '操作需要指定列定义。';
$lang['db_unable_to_set_charset'] = '无法设置字符集： %s';
$lang['db_error_heading'] = '数据库发生错误。';

/* End of file db_lang.php */
/* Location: ./application/language/english/db_lang.php */