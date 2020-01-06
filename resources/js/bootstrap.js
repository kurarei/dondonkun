//Ajaxリクエストであることを示す X-Requested-With ヘッダーを付与し、トークンを X-XSRF-TOKEN ヘッダーに含めることで、
// Laravel はフォームではなくヘッダーを見て CSRF トークンチェックを行う
import { getCookieValue } from './util'

window.axios = require('axios')

// Ajaxリクエストであることを示すヘッダーを付与する
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

window.axios.interceptors.request.use(config => {
  // クッキーからトークンを取り出してヘッダーに添付する
  config.headers['X-XSRF-TOKEN'] = getCookieValue('XSRF-TOKEN')

  return config
})
