<?php
$lang->cmd_denied_ip = '스팸 IP 목록';
$lang->cmd_denied_word = '스팸 키워드 목록';
$lang->cmd_config_block = '자동 차단 설정';
$lang->add_denied_ip = '스팸 IP 추가';
$lang->add_denied_word = '스팸 키워드 추가';
$lang->spamfilter = '스팸필터';
$lang->denied_ip = '금지 IP';
$lang->interval = '스팸 처리 간격';
$lang->limit_count = '제한 수';
$lang->check_trackback = '트랙백 검사';
$lang->word = '키워드';
$lang->hit = '히트';
$lang->latest_hit = '최근 히트';
$lang->about_interval = '지정된 시간 내에 글을 등록하지 못하게 합니다.';
$lang->about_denied_ip = '한 줄에 하나씩 IP 주소 또는 대역을 입력하세요. &quot;//&quot; 또는 &quot;#&quot; 뒷부분은 설명으로 저장됩니다. 예: 127.0.0.1 //설명, 127.0.0.1 #설명<br>IP 대역 표기법은 <a href="https://github.com/rhymix/rhymix-docs/blob/master/ko/misc/ipfilter.md" target="_blank">매뉴얼</a>을 참고하십시오.';
$lang->about_denied_word = '한 줄에 하나씩 스팸 키워드를 입력하세요. (2~40자)';
$lang->msg_alert_limited_by_config = '%d초 이내에 연속 글 작성은 금지됩니다. 계속 시도하면 IP가 차단될 수 있습니다.';
$lang->msg_alert_limited_message_by_config = '%d초 이내에 연속 쪽지 발송은 금지됩니다. 계속 시도하면 IP가 차단될 수 있습니다.';
$lang->msg_alert_denied_word = '"%s"은(는) 사용이 금지된 단어입니다.';
$lang->msg_alert_registered_denied_ip = 'IP가 차단되었습니다. 사이트 관리자에게 문의 바랍니다.';
$lang->msg_alert_trackback_denied = '한 글에는 하나의 트랙백만 허용됩니다.';
$lang->cmd_interval = '글, 댓글 스팸 차단';
$lang->cmd_interval_help = '아래에 지정한 시간 내에 다수의 글이나 댓글을 작성하면 스패머로 간주하고 글, 댓글 작성과 엮인글 발송, 쪽지 발송을 차단합니다.';
$lang->cmd_check_trackback = '트랙백 스팸 차단';
$lang->cmd_check_trackback_help = '하나의 글에 2회 이상 엮인글을 등록하면 스패머로 간주하고 엮인글을 차단합니다.<br>트랙백 모듈이 설치되어 있는 경우에만 적용됩니다.';
$lang->cmd_limits_interval = '글, 댓글 제한 시간';
$lang->cmd_limits_interval_help = '지정한 시간 내에 아래의 갯수만큼 글이나 댓글을 작성하면 스패머로 간주합니다.';
$lang->cmd_limits_count = '글, 댓글 작성 갯수';
$lang->cmd_limits_count_help = '위에서 지정한 시간 내에 이 갯수만큼 글이나 댓글을 작성하면 스패머로 간주합니다.';
$lang->cmd_ipv4_block_range = 'IPv4 차단 범위';
$lang->cmd_ipv6_block_range = 'IPv6 차단 범위';
$lang->cmd_block_range_self = '해당 IP만 차단';
$lang->cmd_block_range_help = '스패머 발견시 비슷한 대역의 IP를 한꺼번에 차단할 수 있습니다. 숫자가 작을수록 광범위하게 차단됩니다.<br>지나치게 광범위하게 차단하면 정상적인 사용자에게 피해가 발생할 수 있으니 주의하시기 바랍니다.';
$lang->cmd_block_range = '마지막 %d자리가 같은 IP를 모두 차단';
$lang->unit_write_count = '회';
$lang->add = '추가';
$lang->msg_duplicate = '이미 존재합니다.';
$lang->msg_invalid_ip = 'IP 주소 형식이 올바르지 않습니다.';
$lang->msg_invalid_word = '스팸 키워드는 2~40자 사이여야 합니다.';
$lang->msg_faillist = '<br />실패 (이미 차단되어 있습니다)<br /> %s ';
