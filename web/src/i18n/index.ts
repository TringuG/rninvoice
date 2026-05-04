import { createI18n } from 'vue-i18n'
import en from './en.json'
import sk from './sk.json'

export const i18n = createI18n({
  legacy: false,
  locale: localStorage.getItem('locale') || 'sk',
  fallbackLocale: 'sk',
  messages: { en, sk },
})
